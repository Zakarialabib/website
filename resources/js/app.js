import './bootstrap';

import {
    Livewire,
    Alpine
} from '../../vendor/livewire/livewire/dist/livewire.esm';

import Prism from './prism';

import editorjs from './editor';

import Cropper from 'cropperjs';
window.Cropper = Cropper;

import mask from '@alpinejs/mask'
Alpine.plugin(mask)

Alpine.data("mainTheme", () => {

    const useTheme = () => {
        if (window.localStorage.getItem("dark")) {
            return JSON.parse(window.localStorage.getItem("dark"));
        }
        return (
            !!window.matchMedia &&
            window.matchMedia("(prefers-color-scheme: dark)").matches
        );
    };

    const setTheme = (value) => {
        window.localStorage.setItem("dark", value);
    };

    const useRtl = () => {
        if (window.localStorage.getItem("rtl")) {
            return JSON.parse(window.localStorage.getItem("rtl"));
        }
        return true; // Default value
    };

    const setRtl = (value) => {
        window.localStorage.setItem("rtl", value);
    };

    const loadingMask = {
        pageLoaded: false,
        showText: false,
        init() {
            window.onload = () => {
                this.pageLoaded = true;
            };
            this.animateCharge();
        },
        animateCharge() {
            setInterval(() => {
                this.showText = true;
                setTimeout(() => {
                    this.showText = false;
                }, 2000);
            }, 4000);
        },
    };

    return {
        isDarkMode: useTheme(),
        toggleTheme() {
            this.isDarkMode = !this.isDarkMode;
            setTheme(this.isDarkMode);
        },
        isRtl: useRtl(),
        toggleRtl() {
            this.isRtl = !this.isRtl;
            setRtl(this.isRtl);
        },
        loadingMask
    };
});

Livewire.start()