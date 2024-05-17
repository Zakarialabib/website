<?php

declare(strict_types=1);

use App\Enums\Status;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Output\RenderedContentInterface;
use App\Models\Language;
use App\Models\Page;
use App\Models\Settings;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Schema;



if (!function_exists('settings')) {
    // Function definition for settings if it doesn't exist
    function settings(mixed $key)
    {
        // Fetch settings from cache, if not available, retrieve from database and cache
        return Cache::rememberForever('settings', static fn () => Settings::pluck('value', 'key'))->firstWhere('key', $key)?->value;
    }

    function flagImageUrl($language_code)
    {
        return asset(sprintf('images/flags/%s.png', $language_code));
    }
}


function uploadImage(string $path, string $width, string $height): string
{
    // Generate a random image filename
    $filename = Str::random(12) . '.jpg'; // You can adjust the filename format if needed

    // Generate the full path to save the image
    $imagePath = public_path($path . '/' . $filename);

    $imageUrl = 'https://picsum.photos/' . $width . '/' . $height . '/';

    // Save the image to the local filesystem
    file_put_contents($imagePath, file_get_contents($imageUrl));

    return $filename;
}


if (!function_exists('getActivePages')) {
    function getActivePages()
    {
        return Page::active()
            ->select('id', 'title', 'slug')
            ->limit(4)
            ->get();
    }
}

if (!function_exists('uploadImage')) {
    /**
     *
     * @return string|null
     */
    function uploadImage(mixed $image): ?string
    {
        // Path cannot be empty
        if (empty($image)) {
            return null;
        }

        $image = file_get_contents($image);
        $name = Str::random(10) . '.jpg';
        $path = public_path() . '/images/products/' . $name;
        file_put_contents($path, $image);

        return $name;
    }
}

if (!function_exists('uploadGallery')) {
    /**
     *
     * @return array<string>|null
     */
    function uploadGallery(mixed $gallery)
    {
        // Path cannot be empty
        if (empty($gallery)) {
            return null;
        }

        $gallery = explode(',', (string) $gallery);

        return array_map(static function ($image): string {
            $image = file_get_contents($image);
            $name = Str::random(10) . '.jpg';
            $path = public_path() . '/images/products/' . $name;
            file_put_contents($path, $image);

            return $name;
        }, $gallery);
    }
}

if (!function_exists('handleUpload')) {
    /**
     *
     * @return string|false|void
     */
    function handleUpload(mixed $input)
    {
        if (is_array($input)) {
            // handle gallery
            $galleryArray = [];

            foreach ($input as $value) {
                $img = Image::make($value->getRealPath())->encode('webp', 85)->resize(1000, 1000, static function ($constraint): void {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                $img->stream();
                Storage::disk('local_files')->put('products/' . $value->getClientOriginalName(), $img, 'public');
                $galleryArray[] = $value->getClientOriginalName();
            }

            return json_encode($galleryArray);
        }

        // handle single image

        $img = Image::make($input->getRealPath())->encode('webp', 85)->resize(1000, 1000, static function ($constraint): void {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $img->stream();

        Storage::disk('local_files')->put('products/' . $input->getClientOriginalName(), $img, 'public');
    }
}

if (!function_exists('active')) {
    /**
     * @param array<string> $routes
     * @return string
     */
    function active(array $routes, string $activeClass = 'active', string $defaultClass = '', bool $condition = true): string
    {
        return call_user_func_array([app('router'), 'is'], $routes) && $condition ? $activeClass : $defaultClass;
    }
}

if (!function_exists('is_active')) {
    /**
     * Determines if the given routes are active.
     */
    function is_active(string ...$routes): bool
    {
        return (bool) call_user_func_array([app('router'), 'is'], $routes);
    }
}

if (!function_exists('md_to_html')) {
    function md_to_html(string $markdown): RenderedContentInterface
    {
        return Markdown::convert($markdown);
    }
}

if (!function_exists('replace_links')) {
    function replace_links(string $markdown): string
    {
        return (new LinkFinder([
            'attrs' => ['target' => '_blank', 'rel' => 'nofollow'],
        ]))->processHtml($markdown);
    }
}

if (!function_exists('get_current_theme')) {
    function get_current_theme(): string
    {
        return Auth::user() !== null ?
            Auth::user()->setting('theme', 'theme-light') :
            'theme-light';
    }
}

if (!function_exists('canonical')) {
    /**
     * @param array<string> $params
     * @return string
     */
    function canonical(string $route, array $params = []): string
    {
        $page = app('request')->get('page');
        $params = array_merge($params, ['page' => 1 !== $page ? $page : null]);

        ksort($params);

        return route($route, $params);
    }
}

if (!function_exists('getFilter')) {
    /**
     * @param array<string> $filters
     * @return string
     */
    function getFilter(string $key, array $filters = [], string $default = 'recent'): string
    {
        $filter = (string) request($key);

        return in_array($filter, $filters) ? $filter : $default;
    }
}
