<section
    class="mx-auto w-full max-w-screen-lg overflow-x-clip px-5 pt-20 min-[550px]:px-10 sm:overflow-x-visible"
>
    <div
        class="relative isolate z-0 -my-20 grid place-items-center [container-type:inline-size]"
    >
        {{-- Version --}}
        <div
            x-init="
                () => {
                    if (reducedMotion) return
                    gsap.fromTo(
                        $el,
                        {
                            autoAlpha: 0,
                            y: -10,
                        },
                        {
                            autoAlpha: 0.3,
                            y: 0,
                            duration: 0.8,
                            ease: 'power1.in',
                        },
                    )
                }
            "
            class="relative -z-10 -my-3 self-center justify-self-center truncate bg-gradient-to-r from-[#DCEED8] via-[#E9E4C4] to-[#DDDBD1] bg-clip-text text-[16cqw] font-semibold tracking-wide text-transparent opacity-30 [grid-area:1/-1]"
        >
            Version 4
        </div>

        {{-- Hummingbird --}}
        <img
            x-init="
                () => {
                    if (reducedMotion) return
                    gsap.fromTo(
                        $el,
                        {
                            autoAlpha: 0,
                            x: -10,
                            y: -5,
                        },
                        {
                            autoAlpha: 1,
                            x: 0,
                            y: 0,
                            duration: 0.7,
                            ease: 'power1.out',
                        },
                    )
                }
            "
            src="{{ Vite::asset('resources/images/home/hummingbird.webp') }}"
            alt=""
            class="relative z-10 w-44 self-center justify-self-center [grid-area:1/-1] sm:w-[14rem]"
        />
    </div>
    <header class="relative isolate z-0 grid place-items-center pt-14 sm:pt-10">
        {{-- Accelerated Laravel Development --}}
        <img
            x-init="
                () => {
                    if (reducedMotion) return
                    gsap.fromTo(
                        $el,
                        {
                            autoAlpha: 0,
                        },
                        {
                            autoAlpha: 1,
                            duration: 0.3,
                            ease: 'power1.in',
                        },
                    )
                }
            "
            src="{{ Vite::asset('resources/images/home/hero-header.webp') }}"
            alt="Filament"
            class="w-[32rem] self-center justify-self-center [grid-area:1/-1]"
        />

        {{-- Watercolor --}}
        <img
            x-init="
                () => {
                    if (reducedMotion) return
                    gsap.fromTo(
                        $el,
                        {
                            autoAlpha: 0,
                        },
                        {
                            autoAlpha: 1,
                            duration: 0.5,
                            ease: 'power1.in',
                        },
                    )
                }
            "
            src="{{ Vite::asset('resources/images/home/hero-watercolor.webp') }}"
            alt=""
            class="relative -z-50 -mb-5 w-[45rem] self-center justify-self-center [grid-area:1/-1]"
        />

        {{-- Admin panel --}}
        <div
            x-init="
                () => {
                    if (reducedMotion) return
                    gsap.fromTo(
                        $el,
                        {
                            autoAlpha: 0,
                            scale: 0.9,
                        },
                        {
                            autoAlpha: 1,
                            scale: 1,
                            duration: 0.7,
                            ease: 'back.out(1.7)',
                        },
                    )
                }
            "
            class="relative left-5 -mt-8 hidden self-start justify-self-start [grid-area:1/-1] md:block"
        >
            <img
                src="{{ Vite::asset('resources/svg/home/green-butterfly.svg') }}"
                alt=""
                class="relative -top-0.5 z-10 -my-5 -ml-4"
            />
            <h3
                class="rounded-full bg-white px-4 py-1.5 capitalize ring-1 ring-black"
            >
                Admin panel
            </h3>
            <div class="relative -right-2.5 -top-1.5 flex justify-end">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    viewBox="0 0 16 16"
                    fill="none"
                >
                    <path
                        d="M12.5083 14.9793L12.5081 14.9793L2.29213 12.5378L2.29208 12.5378C1.47161 12.3419 0.915187 11.7395 0.709465 11.0278C0.522549 10.3813 0.761012 9.7994 1.31968 9.18771C1.80763 8.65344 2.46826 8.17505 3.13144 7.69482C3.24398 7.61333 3.35659 7.53178 3.46844 7.4499C4.17752 6.93082 4.9292 6.32654 5.49076 5.73424C6.05232 5.14194 6.61573 4.35917 7.09633 3.62346C7.17214 3.50741 7.24758 3.39062 7.32296 3.2739C7.76721 2.5861 8.20976 1.90094 8.71729 1.38523C9.29837 0.794798 9.86671 0.5257 10.5223 0.67793C11.2439 0.845478 11.875 1.36905 12.1144 2.17792L12.1144 2.17797L15.0963 12.2495L15.0963 12.2497C15.5712 13.852 14.1336 15.3682 12.5083 14.9793Z"
                        fill="white"
                        stroke="black"
                    />
                </svg>
            </div>
        </div>

        {{-- UI Components --}}
        <div
            x-init="
                () => {
                    if (reducedMotion) return
                    gsap.fromTo(
                        $el,
                        {
                            autoAlpha: 0,
                            scale: 0.9,
                        },
                        {
                            autoAlpha: 1,
                            scale: 1,
                            duration: 0.7,
                            ease: 'back.out(1.7)',
                            delay: 0.2,
                        },
                    )
                }
            "
            class="relative -mt-8 hidden self-start justify-self-end [grid-area:1/-1] md:block"
        >
            <h3
                class="rounded-full bg-white px-4 py-1.5 capitalize ring-1 ring-black"
            >
                UI Components
            </h3>
            <div class="relative -left-2.5 -top-1.5 flex justify-start">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="17"
                    height="16"
                    viewBox="0 0 17 16"
                    fill="none"
                >
                    <path
                        d="M3.90335 14.9793L3.90348 14.9793L14.1195 12.5378L14.1195 12.5378C14.94 12.3419 15.4964 11.7395 15.7022 11.0278C15.8891 10.3813 15.6506 9.7994 15.0919 9.18771C14.604 8.65344 13.9434 8.17505 13.2802 7.69482C13.1676 7.61333 13.055 7.53178 12.9432 7.4499C12.2341 6.93082 11.4824 6.32654 10.9209 5.73424C10.3593 5.14194 9.79589 4.35917 9.31529 3.62346C9.23948 3.50741 9.16405 3.39062 9.08866 3.2739C8.64441 2.5861 8.20187 1.90094 7.69433 1.38523C7.11325 0.794798 6.54491 0.5257 5.88929 0.67793C5.16771 0.845478 4.53657 1.36905 4.29719 2.17792L4.29718 2.17797L1.31533 12.2495L1.31529 12.2497C0.840441 13.852 2.27802 15.3682 3.90335 14.9793Z"
                        fill="white"
                        stroke="black"
                    />
                </svg>
            </div>
            <div class="flex justify-end">
                <img
                    src="{{ Vite::asset('resources/svg/home/blue-butterfly.svg') }}"
                    alt=""
                    class="relative -top-0.5 z-10"
                />
            </div>
        </div>

        {{-- Form builder --}}
        <div
            x-init="
                () => {
                    if (reducedMotion) return
                    gsap.fromTo(
                        $el,
                        {
                            autoAlpha: 0,
                            scale: 0.9,
                        },
                        {
                            autoAlpha: 1,
                            scale: 1,
                            duration: 0.7,
                            ease: 'back.out(1.7)',
                            delay: 0.1,
                        },
                    )
                }
            "
            class="relative -mb-8 hidden self-end justify-self-start [grid-area:1/-1] md:block"
        >
            <img
                src="{{ Vite::asset('resources/svg/home/pink-butterfly.svg') }}"
                alt=""
                class="relative -top-0.5 z-10 -my-5 -ml-10"
            />
            <div class="relative -right-3 top-2 flex justify-end">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="17"
                    viewBox="0 0 16 17"
                    fill="none"
                >
                    <path
                        d="M12.5083 1.48344L12.5081 1.48347L2.29213 3.92494L2.29208 3.92495C1.47161 4.12093 0.915187 4.7233 0.709465 5.43494C0.522549 6.08153 0.761012 6.66339 1.31968 7.27507C1.80763 7.80934 2.46826 8.28773 3.13144 8.76797C3.24398 8.84946 3.35659 8.931 3.46844 9.01289C4.17752 9.53197 4.9292 10.1362 5.49076 10.7285C6.05232 11.3208 6.61573 12.1036 7.09633 12.8393C7.17214 12.9554 7.24758 13.0722 7.32296 13.1889C7.76721 13.8767 8.20976 14.5618 8.71729 15.0776C9.29837 15.668 9.86671 15.9371 10.5223 15.7849C11.2439 15.6173 11.875 15.0937 12.1144 14.2849L12.1144 14.2848L15.0963 4.21326L15.0963 4.21313C15.5712 2.61081 14.1336 1.09455 12.5083 1.48344Z"
                        fill="white"
                        stroke="black"
                    />
                </svg>
            </div>
            <h3
                class="rounded-full bg-white px-4 py-1.5 capitalize ring-1 ring-black"
            >
                Form builder
            </h3>
        </div>

        {{-- Table builder --}}
        <div
            x-init="
                () => {
                    if (reducedMotion) return
                    gsap.fromTo(
                        $el,
                        {
                            autoAlpha: 0,
                            scale: 0.9,
                        },
                        {
                            autoAlpha: 1,
                            scale: 1,
                            duration: 0.7,
                            ease: 'back.out(1.7)',
                            delay: 0.3,
                        },
                    )
                }
            "
            class="relative -mb-8 hidden self-end justify-self-end [grid-area:1/-1] md:block"
        >
            <div class="flex justify-end">
                <img
                    src="{{ Vite::asset('resources/svg/home/purple-butterfly.svg') }}"
                    alt=""
                    class="relative top-2.5 z-10 -my-5 -mr-3"
                />
            </div>
            <div class="relative -left-3 top-2 flex justify-start">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="17"
                    height="17"
                    viewBox="0 0 17 17"
                    fill="none"
                >
                    <path
                        d="M3.90335 1.48341L3.90348 1.48344L14.1195 3.92491L14.1195 3.92492C14.94 4.1209 15.4964 4.72327 15.7022 5.43491C15.8891 6.0815 15.6506 6.66335 15.0919 7.27504C14.604 7.80931 13.9434 8.2877 13.2802 8.76794C13.1676 8.84943 13.055 8.93097 12.9432 9.01286C12.2341 9.53194 11.4824 10.1362 10.9209 10.7285C10.3593 11.3208 9.79589 12.1036 9.31529 12.8393C9.23948 12.9553 9.16405 13.0721 9.08866 13.1889C8.64441 13.8767 8.20187 14.5618 7.69433 15.0775C7.11325 15.668 6.54491 15.9371 5.88929 15.7848C5.16771 15.6173 4.53657 15.0937 4.29719 14.2848L4.29718 14.2848L1.31533 4.21323L1.31529 4.2131C0.840441 2.61078 2.27802 1.09452 3.90335 1.48341Z"
                        fill="white"
                        stroke="black"
                    />
                </svg>
            </div>
            <h3
                class="rounded-full bg-white px-4 py-1.5 capitalize ring-1 ring-black"
            >
                Table builder
            </h3>
        </div>

        {{-- Left leaf --}}
        <div
            x-init="
                () => {
                    if (reducedMotion) return
                    gsap.fromTo(
                        $el,
                        {
                            autoAlpha: 0,
                            x: -10,
                            y: -5,
                        },
                        {
                            autoAlpha: 1,
                            x: 0,
                            y: 0,
                            duration: 0.7,
                            ease: 'power1.out',
                        },
                    )
                }
            "
            class="relative -left-5 -top-10 -z-40 hidden self-center justify-self-start [grid-area:1/-1] md:block"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="34"
                height="16"
                viewBox="0 0 34 16"
                fill="none"
            >
                <g clip-path="url(#clip0_193_3440)">
                    <path
                        d="M33.9941 3.99122C34.1874 4.12583 29.4725 8.36284 29.0391 8.71983C23.8439 12.9861 16.9736 11.3124 10.8823 12.5647C7.18071 13.3255 3.4615 14.4609 0 15.9942C0 15.9942 13.9046 -9.63277 33.9941 3.98537V3.99122Z"
                        fill="#6BB2AC"
                    />
                    <path
                        d="M13.4183 3.24799C15.152 0.433071 18.7716 1.22897 21.8231 1.27579C22.4088 1.35772 23.1878 0.836874 23.7443 0.0702322C16.1418 -0.596922 9.95683 3.86833 5.8042 8.23409C9.16027 9.06511 11.6436 5.8932 13.4183 3.24799Z"
                        fill="#7BCCC5"
                    />
                    <path
                        d="M20.0544 10.4872C18.1041 11.4528 15.527 9.37528 13.1959 10.2882C11.9132 10.8617 10.6012 11.6635 9.74609 12.8105C10.1268 12.7228 10.5016 12.6408 10.8824 12.5647C16.9737 11.3124 23.8439 12.9803 29.0391 8.71983C29.1855 8.59693 29.8415 8.01756 30.6322 7.29774C26.9716 6.37309 23.4808 8.65546 20.0544 10.4872Z"
                        fill="#7BCCC5"
                    />
                    <path
                        d="M1.92696 12.9803C0.6677 14.7652 0 16 0 16C0.661843 15.7074 1.32954 15.4265 2.00896 15.1631C6.16744 12.1141 10.6246 9.31676 15.6031 7.47331C18.6253 6.36723 21.8408 5.95758 24.8923 5.33724C27.4811 4.7169 30.6908 3.94441 33.0512 5.04463C33.6486 4.45941 34.0527 4.03219 33.9941 3.99123C32.647 3.07828 31.3351 2.34675 30.0465 1.76738C24.5409 1.96636 19.2052 2.58669 13.9866 5.33724C9.71094 7.64302 5.69302 10.1653 1.92696 12.9803Z"
                        fill="#64A69F"
                    />
                    <path
                        d="M4.02368 13.3314C11.7549 5.782 23.2406 1.17629 33.9941 3.99122C32.6587 3.70446 31.3174 3.44696 29.9586 3.35332C20.3765 2.48719 10.9174 6.88222 4.02368 13.3372V13.3314Z"
                        fill="#518783"
                    />
                    <path
                        d="M23.551 9.11192C24.9743 6.1624 28.1429 4.52962 31.0656 3.37673L31.0539 3.49378C29.2968 2.60424 27.4459 1.82589 25.5014 1.43379C24.8571 1.30505 24.1953 1.22311 23.5334 1.26993C26.1984 1.11192 28.7462 2.27066 31.1124 3.38259L31.2413 3.44696L31.1066 3.49963C28.1898 4.65252 25.0563 6.22677 23.551 9.11777V9.11192Z"
                        fill="#518783"
                    />
                    <path
                        d="M18.3969 8.95391C19.4453 6.58376 21.2727 4.4711 23.6565 3.38844V3.50549C21.8526 2.62765 19.867 2.03658 17.8522 1.98391C17.1787 1.9605 16.5051 2.03072 15.8433 2.15362C17.1611 1.83175 18.5433 1.86101 19.8729 2.11265C21.2493 2.376 22.5847 2.81492 23.844 3.44111C21.4016 4.48281 19.5566 6.59546 18.4028 8.94806L18.3969 8.95391Z"
                        fill="#518783"
                    />
                    <path
                        d="M12.9148 10.7271C13.5474 8.63203 14.7598 6.67739 16.4583 5.2787L16.4817 5.39575C15.4099 5.1441 14.3088 4.9978 13.2077 4.95683C12.1065 4.92172 10.9937 4.9978 9.92188 5.27285C12.0597 4.63496 14.3556 4.81053 16.5169 5.26115L16.6457 5.29041L16.5403 5.37819C14.8242 6.74176 13.6469 8.673 12.9148 10.7213V10.7271Z"
                        fill="#518783"
                    />
                    <path
                        d="M8.09436 12.3482C8.10608 10.8793 8.75035 9.32845 10.0448 8.54426L10.0682 8.6613C8.48093 8.54425 6.76482 8.62619 5.37085 9.48061C6.03269 8.99488 6.8351 8.74908 7.63752 8.62033C8.50436 8.49158 9.38877 8.45062 10.2615 8.55011C8.88506 9.29334 8.20565 10.8325 8.09436 12.3482Z"
                        fill="#518783"
                    />
                    <path
                        d="M14.373 8.56766C14.9236 7.46744 15.6557 6.27944 16.8271 5.77029C15.7143 6.39063 15.0349 7.52011 14.373 8.56766Z"
                        fill="#518783"
                    />
                    <path
                        d="M18.6135 2.57498C19.7791 2.42867 21.0208 2.68617 22.0165 3.30651C20.9505 2.80321 19.7908 2.55742 18.6135 2.57498Z"
                        fill="#518783"
                    />
                    <path
                        d="M24.6638 6.80614C25.7767 5.49524 27.2233 4.39502 28.875 3.88588C27.2643 4.51792 25.8704 5.58303 24.6638 6.80614Z"
                        fill="#518783"
                    />
                    <path
                        d="M6.52466 9.45135C7.13965 9.08851 7.95963 8.80175 8.65076 9.10607C7.91863 8.9305 7.20407 9.20556 6.52466 9.45135Z"
                        fill="#518783"
                    />
                </g>
                <defs>
                    <clipPath id="clip0_193_3440">
                        <rect
                            width="34"
                            height="16"
                            fill="white"
                        />
                    </clipPath>
                </defs>
            </svg>
        </div>

        {{-- Right leaf --}}
        <div
            x-init="
                () => {
                    if (reducedMotion) return
                    gsap.fromTo(
                        $el,
                        {
                            autoAlpha: 0,
                            x: 10,
                            y: 5,
                        },
                        {
                            autoAlpha: 1,
                            x: 0,
                            y: 0,
                            duration: 0.7,
                            ease: 'power1.out',
                        },
                    )
                }
            "
            class="relative -left-10 -z-40 hidden self-center justify-self-end [grid-area:1/-1] md:block"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="28"
                height="20"
                viewBox="0 0 28 20"
                fill="none"
            >
                <g clip-path="url(#clip0_193_3424)">
                    <path
                        d="M0 0.0278984C0 -0.195254 5.8795 1.1325 6.3973 1.27197C12.5607 2.96235 15.0384 9.22176 19.3589 13.2664C21.9869 15.7266 24.9044 17.9916 28 19.8382C28 19.8382 0.46212 23.1465 0 0.0278984Z"
                        fill="#6BB2AC"
                    />
                    <path
                        d="M10.7234 16.4296C7.58325 16.6304 6.21359 13.3835 4.57112 10.9847C4.31501 10.4826 3.47985 10.1646 2.57788 10.1534C6.23586 16.4296 13.1008 18.7838 18.7743 19.6039C17.5773 16.5356 13.7467 16.3515 10.7234 16.4351V16.4296Z"
                        fill="#7BCCC5"
                    />
                    <path
                        d="M12.6998 7.28033C14.526 8.26778 14.3256 11.4142 16.3133 12.7197C17.4602 13.4003 18.8076 13.9805 20.1661 14.0084C19.8933 13.7629 19.6205 13.5119 19.3532 13.2608C15.0383 9.22175 12.5551 2.96234 6.39719 1.27196C6.21902 1.22175 5.40614 1.03207 4.42065 0.814499C5.71236 4.16736 9.40375 5.62343 12.7054 7.28033H12.6998Z"
                        fill="#7BCCC5"
                    />
                    <path
                        d="M24.5926 20C26.6693 20 27.9944 19.8383 27.9944 19.8383C27.4043 19.4868 26.8196 19.1186 26.2406 18.7392C21.586 17.1827 16.9704 15.2636 12.8002 12.4073C10.2836 10.6667 8.19566 8.39056 6.03539 6.35987C4.14237 4.69181 1.7761 2.62208 1.33625 0.178563C0.551203 0.033514 0 -0.0445892 0 0.0279352C0.0334062 1.57326 0.183734 3.00144 0.439849 4.32361C3.61901 8.49656 7.03201 12.3013 12.0318 14.8397C16.1742 16.8927 20.3333 18.6277 24.5926 20.0056V20Z"
                        fill="#64A69F"
                    />
                    <path
                        d="M23.7184 18.1813C13.6075 16.3236 3.7248 9.93584 0 0.0278931C0.512229 1.22176 1.04673 2.41004 1.72042 3.52022C6.30821 11.4477 14.9215 16.3794 23.7184 18.1813Z"
                        fill="#518783"
                    />
                    <path
                        d="M9.71564 5.32218C6.64227 5.841 3.6357 4.27894 1.13023 2.63877L1.22489 2.58298C1.4977 4.44073 1.91528 6.30404 2.67249 8.03347C2.9286 8.60251 3.22926 9.16597 3.62457 9.65133C2.04334 7.66527 1.54225 5.04324 1.10796 2.59414L1.08569 2.46025L1.20262 2.53835C3.69695 4.16736 6.64227 5.74059 9.71564 5.3166V5.32218Z"
                        fill="#518783"
                    />
                    <path
                        d="M12.4216 9.41702C10.0052 9.90237 7.36057 9.65133 5.20587 8.39052L5.30052 8.32915C5.60675 10.2148 6.24146 12.0837 7.31046 13.6792C7.66123 14.2148 8.08438 14.7001 8.5465 15.1464C6.60337 13.4226 5.62345 10.8563 5.17803 8.34589L5.15576 8.21758L5.27268 8.28452C7.39398 9.56207 10.0052 9.80195 12.4216 9.41702Z"
                        fill="#518783"
                    />
                    <path
                        d="M16.8088 12.7029C14.8379 13.3668 12.6498 13.5007 10.6342 12.954L10.7122 12.8703C11.1019 13.841 11.5975 14.7782 12.1709 15.6597C12.75 16.5356 13.4181 17.3556 14.2254 18.0418C12.5551 16.7308 11.4304 14.8508 10.5953 12.9205L10.5452 12.8033L10.6732 12.8368C12.672 13.417 14.8267 13.272 16.8144 12.7085L16.8088 12.7029Z"
                        fill="#518783"
                    />
                    <path
                        d="M20.7173 15.5537C19.5704 16.3515 18.0114 16.7029 16.6919 16.1339L16.7698 16.0502C17.1596 16.7085 17.6105 17.3389 18.1339 17.9024C18.6628 18.4547 19.2642 18.9568 19.9824 19.2524C18.5069 18.7225 17.4602 17.4114 16.6585 16.1116L16.575 15.9609L16.7364 16.0279C18.0281 16.6137 19.5314 16.2622 20.7118 15.5593L20.7173 15.5537Z"
                        fill="#518783"
                    />
                    <path
                        d="M14.3313 12.7587C13.1732 12.9372 11.8481 13.0265 10.8125 12.3905C11.9038 12.9149 13.1565 12.8145 14.3313 12.7587Z"
                        fill="#518783"
                    />
                    <path
                        d="M7.34947 12.7587C6.59783 11.9331 6.11901 10.8285 6.04663 9.70712C6.23593 10.8117 6.68692 11.8494 7.34947 12.7587Z"
                        fill="#518783"
                    />
                    <path
                        d="M7.31587 5.72943C5.6901 5.58996 4.04205 5.06555 2.73364 4.06695C4.10887 4.97071 5.70123 5.46723 7.31587 5.72943Z"
                        fill="#518783"
                    />
                    <path
                        d="M19.3256 18.371C18.7076 18.0921 18.0339 17.6123 17.8892 16.9093C18.1564 17.5732 18.7633 17.9805 19.3256 18.371Z"
                        fill="#518783"
                    />
                </g>
                <defs>
                    <clipPath id="clip0_193_3424">
                        <rect
                            width="28"
                            height="20"
                            fill="white"
                        />
                    </clipPath>
                </defs>
            </svg>
        </div>
    </header>

    {{-- Tagline --}}
    <h2
        x-init="
            () => {
                if (reducedMotion) return
                gsap.fromTo(
                    $el,
                    {
                        autoAlpha: 0,
                        y: 10,
                    },
                    {
                        autoAlpha: 1,
                        y: 0,
                        duration: 0.5,
                        ease: 'power1.out',
                    },
                )
            }
        "
        class="mx-auto max-w-xl pt-5 text-center font-afacad text-2xl leading-normal text-[#49485F]"
    >
        Shape your apps with beautiful, powerful and intuitive, TALL stack
        components.
    </h2>

    <div class="grid place-items-center pt-7">
        <a
            x-ref="getstarted"
            href="{{ route('docs') }}"
            class="group inline-flex items-center gap-3 rounded-3xl bg-[#F4E7E2] py-2 pl-2 pr-5 text-lg font-medium transition duration-300 ease-in-out hover:bg-[#ffe8ce]"
        >
            <div
                class="relative isolate grid size-12 place-items-center overflow-hidden rounded-2xl bg-[#E6DAD6] transition duration-300 ease-in-out group-hover:bg-[#ffdeb3]"
            >
                {{-- Left meteor 1 --}}
                <div
                    x-init="
                        () => {
                            gsap.to($el, {
                                duration: 1.5,
                                x: -80,
                                y: 80,
                                ease: 'power1.in',
                                repeat: -1,
                                repeatDelay: 0.5,
                            })
                        }
                    "
                    class="absolute -right-5 -top-9 -z-10"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="18"
                        height="17"
                        viewBox="0 0 18 17"
                        fill="none"
                    >
                        <path
                            d="M17.4801 0L0.610057 15.82C0.610057 15.82 0.280057 16.27 0.700057 16.71C1.11006 17.15 1.65006 16.77 1.65006 16.77L17.4801 0Z"
                            fill="black"
                        />
                    </svg>
                </div>

                {{-- Left meteor 2 --}}
                <div
                    x-init="
                        () => {
                            gsap.to($el, {
                                duration: 1.5,
                                x: -80,
                                y: 80,
                                ease: 'power1.in',
                                repeat: -1,
                                repeatDelay: 0.5,
                                delay: 1,
                            })
                        }
                    "
                    class="absolute -right-5 -top-7 -z-10"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="18"
                        height="17"
                        viewBox="0 0 18 17"
                        fill="none"
                        class="scale-75 opacity-50"
                    >
                        <path
                            d="M17.4801 0L0.610057 15.82C0.610057 15.82 0.280057 16.27 0.700057 16.71C1.11006 17.15 1.65006 16.77 1.65006 16.77L17.4801 0Z"
                            fill="black"
                        />
                    </svg>
                </div>
                {{-- Right meteor 1 --}}
                <div
                    x-init="
                        () => {
                            gsap.to($el, {
                                duration: 1.5,
                                x: -80,
                                y: 80,
                                ease: 'power1.in',
                                repeat: -1,
                                repeatDelay: 0.5,
                            })
                        }
                    "
                    class="absolute -right-5 top-0 -z-10"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="18"
                        height="17"
                        viewBox="0 0 18 17"
                        fill="none"
                    >
                        <path
                            d="M17.4801 0L0.610057 15.82C0.610057 15.82 0.280057 16.27 0.700057 16.71C1.11006 17.15 1.65006 16.77 1.65006 16.77L17.4801 0Z"
                            fill="black"
                        />
                    </svg>
                </div>
                {{-- Right meteor 2 --}}
                <div
                    x-init="
                        () => {
                            gsap.to($el, {
                                duration: 1.5,
                                x: -80,
                                y: 80,
                                ease: 'power1.in',
                                repeat: -1,
                                repeatDelay: 0.5,
                                delay: 1,
                            })
                        }
                    "
                    class="absolute -right-5 top-3 -z-10"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="18"
                        height="17"
                        viewBox="0 0 18 17"
                        fill="none"
                        class="scale-75 opacity-50"
                    >
                        <path
                            d="M17.4801 0L0.610057 15.82C0.610057 15.82 0.280057 16.27 0.700057 16.71C1.11006 17.15 1.65006 16.77 1.65006 16.77L17.4801 0Z"
                            fill="black"
                        />
                    </svg>
                </div>
                {{-- Rocket --}}
                <svg
                    x-init="
                        () => {
                            gsap.to($el, {
                                duration: 1.5,
                                x: 3,
                                y: 3,
                                rotate: 2,
                                scale: 1.02,
                                ease: 'power1.inOut',
                                repeat: -1,
                                yoyo: true,
                            })
                        }
                    "
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    viewBox="0 0 25 25"
                    fill="none"
                    class="will-change-transform"
                >
                    <path
                        d="M17.627 11.7676V17.4118C17.6269 17.6058 17.5498 17.7918 17.4127 17.9291L14.2679 21.0739C14.1717 21.17 14.0507 21.2372 13.9183 21.2684C13.786 21.2995 13.6476 21.2932 13.5186 21.2502C13.3897 21.2071 13.2753 21.129 13.1882 21.0247C13.1012 20.9203 13.0448 20.7938 13.0255 20.6592L12.5 16.8945L17.627 11.7676ZM13.2324 7.37305H7.58822C7.39423 7.37314 7.20819 7.45018 7.07095 7.58728L3.92611 10.7321C3.83009 10.8283 3.76275 10.9494 3.73163 11.0818C3.70049 11.2141 3.70681 11.3524 3.74984 11.4814C3.79289 11.6103 3.87097 11.7247 3.97535 11.8118C4.07973 11.899 4.20628 11.9553 4.34084 11.9745L8.10549 12.5L13.2324 7.37305ZM4.44338 20.5566C7.89034 20.5566 9.08419 18.754 9.4385 17.9767L7.02334 15.5615C6.24606 15.9158 4.44338 17.1097 4.44338 20.5566Z"
                        fill="#C4C4C3"
                    />
                    <path
                        d="M21.2754 5.09522C21.2537 4.73811 21.1021 4.40127 20.849 4.14828C20.5961 3.89529 20.2593 3.74364 19.9021 3.72193C18.7504 3.65327 15.807 3.75856 13.3643 6.20027L12.9295 6.64064H7.58918C7.39608 6.63955 7.20469 6.67686 7.02614 6.75042C6.84759 6.82398 6.68545 6.9323 6.54914 7.0691L3.40888 10.2112C3.2163 10.4036 3.08117 10.646 3.01864 10.9109C2.95612 11.176 2.96868 11.4531 3.05492 11.7114C3.14116 11.9695 3.29766 12.1987 3.50686 12.3729C3.71607 12.5472 3.96969 12.6597 4.23927 12.6978L7.7613 13.1894L11.8088 17.2369L12.3005 20.7608C12.3383 21.0304 12.4507 21.284 12.6251 21.493C12.7995 21.7021 13.029 21.8582 13.2874 21.9437C13.4379 21.9939 13.5956 22.0197 13.7543 22.0197C13.9465 22.02 14.1368 21.9824 14.3145 21.9088C14.492 21.8353 14.6532 21.7273 14.7889 21.5912L17.931 18.4509C18.0678 18.3146 18.1761 18.1525 18.2497 17.9739C18.3232 17.7954 18.3605 17.604 18.3594 17.4109V12.0706L18.7962 11.6339C21.2388 9.19129 21.3441 6.24787 21.2754 5.09522ZM7.58918 8.10548H11.4646L7.84553 11.7236L4.44343 11.2494L7.58918 8.10548ZM14.4016 7.2403C15.1054 6.53218 15.9522 5.98238 16.8854 5.62762C17.8186 5.27286 18.8168 5.12133 19.8133 5.18312C19.8775 6.18011 19.7275 7.17929 19.3735 8.1135C19.0194 9.04772 18.4695 9.89533 17.7607 10.5994L12.5001 15.8582L9.14192 12.5L14.4016 7.2403ZM16.8946 17.4109L13.7516 20.5566L13.2764 17.1536L16.8946 13.5355V17.4109ZM10.1051 18.2806C9.69306 19.1833 8.31519 21.2891 4.44343 21.2891C4.24918 21.2891 4.06289 21.2119 3.92553 21.0746C3.78818 20.9372 3.71101 20.7509 3.71101 20.5566C3.71101 16.6849 5.81672 15.307 6.71943 14.8941C6.80696 14.8542 6.90149 14.8319 6.99763 14.8286C7.09377 14.8252 7.18964 14.8407 7.27975 14.8744C7.36987 14.908 7.45247 14.9591 7.52284 15.0247C7.59321 15.0903 7.64997 15.1691 7.68989 15.2567C7.72981 15.3442 7.75209 15.4388 7.75548 15.5349C7.75886 15.631 7.74327 15.7269 7.70961 15.817C7.67594 15.9071 7.62486 15.9897 7.55926 16.06C7.49367 16.1304 7.41487 16.1872 7.32734 16.2271C6.73866 16.4954 5.43952 17.3587 5.21064 19.7894C7.64137 19.5605 8.50654 18.2614 8.77296 17.6727C8.81287 17.5852 8.86964 17.5064 8.94001 17.4408C9.01039 17.3752 9.09299 17.3241 9.1831 17.2905C9.27322 17.2568 9.36909 17.2412 9.46523 17.2446C9.56136 17.248 9.65589 17.2703 9.74342 17.3102C9.83095 17.3501 9.90975 17.4069 9.97532 17.4773C10.041 17.5476 10.0921 17.6302 10.1256 17.7203C10.1593 17.8104 10.1749 17.9063 10.1715 18.0024C10.1681 18.0986 10.145 18.1931 10.1051 18.2806Z"
                        fill="black"
                    />
                </svg>
            </div>
            <div
                class="transition duration-300 ease-in-out will-change-transform group-hover:translate-x-px"
            >
                Get Started
            </div>
        </a>
    </div>
</section>
