<?php

declare(strict_types=1);

namespace App\Traits;

trait WithChannelsAssociation
{
    /** @var array<string, string> */
    public array $channels_selected = [];

    public array $associateChannels = [];

    public function updatedChannelsSelected(array $choices): void
    {
        dd($choices);

        if ( ! in_array($choices['value'], $this->associateChannels)) {
            $this->associateChannels[] = (int) $choices['value'];
        } else {
            $key = array_search($choices['value'], $this->associateChannels, true);
            unset($this->associateChannels[$key]);
        }
    }
}
