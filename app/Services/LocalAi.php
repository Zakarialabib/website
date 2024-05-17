<?php

namespace App\Services;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use InvalidArgumentException;
use voku\helper\StopWords;
use Wamania\Snowball\StemmerFactory;

class LocalAi
{
    const ARTICLES_PREPOSITIONS = [
        'english' => ['the', 'a', 'an', 'in', 'on', 'at', 'for', 'to', 'of'],
    ];

    const NEGATION_WORDS = [
        'english' => [
            'no', 'nor', 'not', 'don', 'dont', 'ain', 'aren', 'arent', 'couldn', 'couldnt', 'didn', 'didnt', 'doesn', 'doesnt',
            'hadn', 'hadnt', 'hasn', 'hasnt', 'haven', 'havent', 'isn', 'isnt', 'mightn', 'mightnt', 'mustn', 'mustnt',
            'needn', 'neednt', 'shan', 'shant', 'shouldn', 'shouldnt', 'wasn', 'wasnt', 'weren', 'werent', 'won', 'wont',
            'wouldn', 'wouldnt',
        ],
    ];

    protected StopWords $stopWords;

    /**
     * Execute the localAi API call with a given prompt.
     *
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public static function execute($context, string $message, int $maxTokens = 4000): string
    {
        $input_data = [
            "n" => 1,
            "max_context_length" => 12288,
            "max_length" => 512,
            "rep_pen" => 1.1,
            "top_p" => 0.92,
            "top_k" => 100,
            "top_a" => 0,
            "typical" => 1,
            "tfs" => 1,
            "rep_pen_range" => 320,
            "rep_pen_slope" => 0.7,
            "sampler_order" => [6, 0, 1, 3, 4, 2, 5],
            'temperature' => 0.7,
            'stream' => false,
            "min_p" => 0,
            "dynatemp_range" => 0,
            "presence_penalty" => 0,
            'temperature' => 0.7,
            'max_tokens' => $maxTokens,
            'frequency_penalty' => 0,
            // 'model' => 'localModel',
            'memory' => trim($context),
            'prompt' =>  trim($message),
        ];

        $response = Http::timeout(600)
            ->post('http://localhost:5001/v1/chat/completions', $input_data);

        if ($response->failed()) {
            throw new RequestException($response);
        }

        $complete = $response->json();

        return $complete['choices'][0]['message']['content'];
    }

    /**
     * Get the response from the AI assistant.
     *
     * @param array $history
     * @return string
     * @throws RequestException
     * @throws InvalidArgumentException
     */
    public static function getAssistantResponse(array $history): string
    {
        $client = new self(); // You might need to adjust the instantiation based on your Laravel setup

        $completion = $client->getAssistantCompletion($history);

        $newMessage = ["role" => "assistant", "content" => ""];

        foreach ($completion['choices'] as $chunk) {
            if ($chunk['delta']['content']) {
                print($chunk['delta']['content']);
                $newMessage['content'] .= $chunk['delta']['content'];
            }
        }

        return $newMessage['content'];
    }

    /**
     * Get AI assistant completion.
     *
     * @param array $history
     * @return array
     * @throws RequestException
     */
    public function getAssistantCompletion(array $history): array
    {
        $inputData = [
            "n" => 1,
            "max_context_length" => 12288,
            "max_length" => 512,
            "rep_pen" => 1.1,
            "top_p" => 0.92,
            "top_k" => 100,
            "top_a" => 0,
            "typical" => 1,
            "tfs" => 1,
            "rep_pen_range" => 320,
            "rep_pen_slope" => 0.7,
            "sampler_order" => [6, 0, 1, 3, 4, 2, 5],
            'model' => 'localModel',
            'messages' => $history,
            'temperature' => 0.7,
            'stream' => false,
            "min_p" => 0,
            "dynatemp_range" => 0,
            "presence_penalty" => 0,
        ];

        $response = Http::timeout(1000)
            ->post('http://localhost:5001/v1/chat/completions', $inputData);

        if ($response->failed()) {
            throw new RequestException($response);
        }

        return $response->json();
    }

    public function trim(
        string $text,
        string $language = 'en',
        bool $removeSpaces = true,
        bool $removeStopwords = true,
        bool $removePunctuation = true,
        bool $stemmer = false
    ): string {
        if ($stemmer) {
            $stemmer = StemmerFactory::create($language);
        }

        $stopwords = $this->stopWords->getStopWordsFromLanguage($language);

        $text = str_replace(["'", '’'], '', $text);

        $tokenized = preg_split('/\s+/', $text);

        if ($removeStopwords) {
            $wordsToExclude = array_merge($stopwords, self::ARTICLES_PREPOSITIONS[$language] ?? []);
            $wordsToExclude = array_diff($wordsToExclude, self::NEGATION_WORDS[$language] ?? []);

            $tokenized = array_filter($tokenized, function ($word) use ($wordsToExclude) {
                return !in_array(strtolower($word), $wordsToExclude);
            });
        }

        $tokenized = array_values($tokenized);

        $words = $tokenized;

        if ($stemmer) {

            $words = array_map(function ($word) use ($stemmer) {
                return $stemmer->stem($word);
            }, $tokenized);

            $words = array_values($words);

            // Restore title_case and uppercase after stemming
            $caseRestored = [];
            for ($i = 0; $i < count($words); $i++) {
                $word = $words[$i];
                if (ctype_upper(substr($tokenized[$i], 0, 1))) {
                    $word = ucfirst($word);
                } elseif (ctype_upper($tokenized[$i])) {
                    $word = strtoupper($word);
                }
                $caseRestored[] = $word;
            }
            $words = $caseRestored;
        }

        $joinStr = $removeSpaces ? '' : ' ';
        $trimmed = implode($joinStr, $words);

        if (!$removePunctuation) {
            $trimmed = preg_replace('/\s([?.!,:;])/', '$1', $trimmed);
        }

        $trimmed = preg_replace('/[^\x20-\x7F]/', '', $trimmed);

        return $trimmed;
    }
}
