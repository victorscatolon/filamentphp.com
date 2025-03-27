import { gsap } from 'gsap'
import ScrollTrigger from 'gsap/ScrollTrigger'
import Tooltip from '@ryangjchandler/alpine-tooltip'
import 'tippy.js/dist/tippy.css'
import 'tippy.js/themes/material.css'
import 'tippy.js/animations/shift-away-subtle.css'
import autoAnimate from '@formkit/auto-animate'
import MiniSearch from 'minisearch'
import * as rive from '@rive-app/canvas'
import Swiper from 'swiper'
import { Navigation, Pagination } from 'swiper/modules'
import docsearch from '@docsearch/js'
import '../../docs/src/styles/docsearch.css'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import {
    animate,
    hover,
    inView,
    easeIn,
    easeOut,
    easeInOut,
    backIn,
    backOut,
    backInOut,
    circIn,
    circOut,
    circInOut,
    anticipate,
    spring,
    stagger,
} from 'motion'

// Swiper
Swiper.use([Navigation, Pagination])
window.Swiper = Swiper

// Rive
window.rive = rive

// AutoAnimate
window.autoAnimate = autoAnimate

// Asset loading
import.meta.glob(['../images/**', '../svg/**'])

// GSAP
gsap.registerPlugin(ScrollTrigger)
window.ScrollTrigger = ScrollTrigger
window.gsap = gsap
window.reducedMotion = window.matchMedia(
    '(prefers-reduced-motion: reduce)',
).matches

// Minisearch
window.MiniSearch = MiniSearch

// Motion
window.motion = {
    animate: animate,
    hover: hover,
    inView: inView,
    easeIn: easeIn,
    easeOut: easeOut,
    easeInOut: easeInOut,
    backOut: backOut,
    backIn: backIn,
    backInOut: backInOut,
    circIn: circIn,
    circOut: circOut,
    circInOut: circInOut,
    anticipate: anticipate,
    spring: spring,
    stagger: stagger,
}

// Alpine
Alpine.magic('refAll', (el) => {
    return (refName) => {
        return Array.from(el.querySelectorAll(`[x-ref="${refName}"]`))
    }
})
Alpine.store('sidebar', { isOpen: false })
Alpine.plugin(Tooltip)

// Docsearch
docsearch({
    container: '#docsearch',
    appId: 'LMIKXMDI4P',
    apiKey: '1e3d12b0b9c3a4db16cd896e83b9efa0',
    indexName: 'filamentadmin',
    placeholder: 'Search docs',
    searchParameters: {
        facetFilters: ['version:3.x'],
    },
})
