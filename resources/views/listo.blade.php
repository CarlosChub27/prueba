<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Notificación firma</title>
</head>
<style>
    /*
! tailwindcss v3.4.11 | MIT License | https://tailwindcss.com
*/
    /*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/
    *,
    ::before,
    ::after {
        box-sizing: border-box;
        /* 1 */
        border-width: 0;
        /* 2 */
        border-style: solid;
        /* 2 */
        border-color: #e5e7eb;
        /* 2 */
    }

    ::before,
    ::after {
        --tw-content: '';
    }

    /*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
7. Disable tap highlights on iOS
*/
    html,
    :host {
        line-height: 1.5;
        /* 1 */
        -webkit-text-size-adjust: 100%;
        /* 2 */
        -moz-tab-size: 4;
        /* 3 */
        tab-size: 4;
        /* 3 */
        font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        /* 4 */
        font-feature-settings: normal;
        /* 5 */
        font-variation-settings: normal;
        /* 6 */
        -webkit-tap-highlight-color: transparent;
        /* 7 */
    }

    /*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/
    body {
        margin: 0;
        /* 1 */
        line-height: inherit;
        /* 2 */
    }

    /*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/
    hr {
        height: 0;
        /* 1 */
        color: inherit;
        /* 2 */
        border-top-width: 1px;
        /* 3 */
    }

    /*
Add the correct text decoration in Chrome, Edge, and Safari.
*/
    abbr:where([title]) {
        text-decoration: underline dotted;
    }

    /*
Remove the default font size and weight for headings.
*/
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-size: inherit;
        font-weight: inherit;
    }

    /*
Reset links to optimize for opt-in styling instead of opt-out.
*/
    a {
        color: inherit;
        text-decoration: inherit;
    }

    /*
Add the correct font weight in Edge and Safari.
*/
    b,
    strong {
        font-weight: bolder;
    }

    /*
1. Use the user's configured `mono` font-family by default.
2. Use the user's configured `mono` font-feature-settings by default.
3. Use the user's configured `mono` font-variation-settings by default.
4. Correct the odd `em` font sizing in all browsers.
*/
    code,
    kbd,
    samp,
    pre {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        /* 1 */
        font-feature-settings: normal;
        /* 2 */
        font-variation-settings: normal;
        /* 3 */
        font-size: 1em;
        /* 4 */
    }

    /*
Add the correct font size in all browsers.
*/
    small {
        font-size: 80%;
    }

    /*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/
    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
    }

    sub {
        bottom: -0.25em;
    }

    sup {
        top: -0.5em;
    }

    /*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/
    table {
        text-indent: 0;
        /* 1 */
        border-color: inherit;
        /* 2 */
        border-collapse: collapse;
        /* 3 */
    }

    /*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/
    button,
    input,
    optgroup,
    select,
    textarea {
        font-family: inherit;
        /* 1 */
        font-feature-settings: inherit;
        /* 1 */
        font-variation-settings: inherit;
        /* 1 */
        font-size: 100%;
        /* 1 */
        font-weight: inherit;
        /* 1 */
        line-height: inherit;
        /* 1 */
        letter-spacing: inherit;
        /* 1 */
        color: inherit;
        /* 1 */
        margin: 0;
        /* 2 */
        padding: 0;
        /* 3 */
    }

    /*
Remove the inheritance of text transform in Edge and Firefox.
*/
    button,
    select {
        text-transform: none;
    }

    /*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/
    button,
    input:where([type='button']),
    input:where([type='reset']),
    input:where([type='submit']) {
        -webkit-appearance: button;
        /* 1 */
        background-color: transparent;
        /* 2 */
        background-image: none;
        /* 2 */
    }

    /*
Use the modern Firefox focus style for all focusable elements.
*/
    :-moz-focusring {
        outline: auto;
    }

    /*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/
    :-moz-ui-invalid {
        box-shadow: none;
    }

    /*
Add the correct vertical alignment in Chrome and Firefox.
*/
    progress {
        vertical-align: baseline;
    }

    /*
Correct the cursor style of increment and decrement buttons in Safari.
*/
    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
        height: auto;
    }

    /*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/
    [type='search'] {
        -webkit-appearance: textfield;
        /* 1 */
        outline-offset: -2px;
        /* 2 */
    }

    /*
Remove the inner padding in Chrome and Safari on macOS.
*/
    ::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    /*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/
    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        /* 1 */
        font: inherit;
        /* 2 */
    }

    /*
Add the correct display in Chrome and Safari.
*/
    summary {
        display: list-item;
    }

    /*
Removes the default spacing and border for appropriate elements.
*/
    blockquote,
    dl,
    dd,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    figure,
    p,
    pre {
        margin: 0;
    }

    fieldset {
        margin: 0;
        padding: 0;
    }

    legend {
        padding: 0;
    }

    ol,
    ul,
    menu {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    /*
Reset default styling for dialogs.
*/
    dialog {
        padding: 0;
    }

    /*
Prevent resizing textareas horizontally by default.
*/
    textarea {
        resize: vertical;
    }

    /*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/
    input::placeholder,
    textarea::placeholder {
        opacity: 1;
        /* 1 */
        color: #9ca3af;
        /* 2 */
    }

    /*
Set the default cursor for buttons.
*/
    button,
    [role="button"] {
        cursor: pointer;
    }

    /*
Make sure disabled buttons don't get the pointer cursor.
*/
    :disabled {
        cursor: default;
    }

    /*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/
    img,
    svg,
    video,
    canvas,
    audio,
    iframe,
    embed,
    object {
        display: block;
        /* 1 */
        vertical-align: middle;
        /* 2 */
    }

    /*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/
    img,
    video {
        max-width: 100%;
        height: auto;
    }

    /* Make elements with the HTML hidden attribute stay hidden by default */
    [hidden] {
        display: none;
    }

    *,
    ::before,
    ::after {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-gradient-from-position: ;
        --tw-gradient-via-position: ;
        --tw-gradient-to-position: ;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
        --tw-contain-size: ;
        --tw-contain-layout: ;
        --tw-contain-paint: ;
        --tw-contain-style: ;
    }

    ::backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-gradient-from-position: ;
        --tw-gradient-via-position: ;
        --tw-gradient-to-position: ;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
        --tw-contain-size: ;
        --tw-contain-layout: ;
        --tw-contain-paint: ;
        --tw-contain-style: ;
    }

    .pointer-events-none {
        pointer-events: none;
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .my-10 {
        margin-top: 2.5rem;
        margin-bottom: 2.5rem;
    }

    .my-8 {
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    .mb-2 {
        margin-bottom: 0.5rem;
    }

    .mt-2 {
        margin-top: 0.5rem;
    }

    .mt-6 {
        margin-top: 1.5rem;
    }

    .mt-7 {
        margin-top: 1.75rem;
    }

    .flex {
        display: flex;
    }

    .inline-flex {
        display: inline-flex;
    }

    .size-4 {
        width: 1rem;
        height: 1rem;
    }

    .w-40 {
        width: 10rem;
    }

    .w-52 {
        width: 13rem;
    }

    .max-w-2xl {
        max-width: 42rem;
    }

    .shrink-0 {
        flex-shrink: 0;
    }

    .items-center {
        align-items: center;
    }

    .justify-center {
        justify-content: center;
    }

    .gap-x-2 {
        column-gap: 0.5rem;
    }

    .rounded-lg {
        border-radius: 0.5rem;
    }

    .rounded-b-md {
        border-bottom-right-radius: 0.375rem;
        border-bottom-left-radius: 0.375rem;
    }

    .rounded-t-md {
        border-top-left-radius: 0.375rem;
        border-top-right-radius: 0.375rem;
    }

    .border {
        border-width: 1px;
    }

    .border-b-2 {
        border-bottom-width: 2px;
    }

    .border-indigo-500 {
        --tw-border-opacity: 1;
        border-color: rgb(99 102 241 / var(--tw-border-opacity));
    }

    .border-transparent {
        border-color: transparent;
    }

    .bg-gray-700 {
        --tw-bg-opacity: 1;
        background-color: rgb(55 65 81 / var(--tw-bg-opacity));
    }

    .bg-indigo-600 {
        --tw-bg-opacity: 1;
        background-color: rgb(79 70 229 / var(--tw-bg-opacity));
    }

    .bg-indigo-700 {
        --tw-bg-opacity: 1;
        background-color: rgb(67 56 202 / var(--tw-bg-opacity));
    }

    .bg-slate-100 {
        --tw-bg-opacity: 1;
        background-color: rgb(241 245 249 / var(--tw-bg-opacity));
    }

    .p-6 {
        padding: 1.5rem;
    }

    .px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
    }

    .py-6 {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .pb-1 {
        padding-bottom: 0.25rem;
    }

    .pb-5 {
        padding-bottom: 1.25rem;
    }

    .pt-1 {
        padding-top: 0.25rem;
    }

    .pt-4 {
        padding-top: 1rem;
    }

    .pt-9 {
        padding-top: 2.25rem;
    }

    .text-center {
        text-align: center;
    }

    .text-2xl {
        font-size: 1.5rem;
        line-height: 2rem;
    }

    .text-base {
        font-size: 1rem;
        line-height: 1.5rem;
    }

    .text-sm {
        font-size: 0.875rem;
        line-height: 1.25rem;
    }

    .text-xl {
        font-size: 1.25rem;
        line-height: 1.75rem;
    }

    .font-bold {
        font-weight: 700;
    }

    .font-medium {
        font-weight: 500;
    }

    .font-semibold {
        font-weight: 600;
    }

    .italic {
        font-style: italic;
    }

    .leading-5 {
        line-height: 1.25rem;
    }

    .leading-6 {
        line-height: 1.5rem;
    }

    .text-gray-400 {
        --tw-text-opacity: 1;
        color: rgb(156 163 175 / var(--tw-text-opacity));
    }

    .text-gray-600 {
        --tw-text-opacity: 1;
        color: rgb(75 85 99 / var(--tw-text-opacity));
    }

    .text-gray-700 {
        --tw-text-opacity: 1;
        color: rgb(55 65 81 / var(--tw-text-opacity));
    }

    .text-indigo-400 {
        --tw-text-opacity: 1;
        color: rgb(129 140 248 / var(--tw-text-opacity));
    }

    .text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
    }

    .underline {
        text-decoration-line: underline;
    }

    .opacity-50 {
        opacity: 0.5;
    }

    .outline-none {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .hover\:bg-indigo-700:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(67 56 202 / var(--tw-bg-opacity));
    }

    .hover\:underline:hover {
        text-decoration-line: underline;
    }

    .focus\:bg-indigo-700:focus {
        --tw-bg-opacity: 1;
        background-color: rgb(67 56 202 / var(--tw-bg-opacity));
    }

    .focus\:outline-none:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .disabled\:pointer-events-none:disabled {
        pointer-events: none;
    }

    .disabled\:opacity-50:disabled {
        opacity: 0.5;
    }

    @media (min-width: 640px) {
        .sm\:w-52 {
            width: 13rem;
        }

        .sm\:text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }
    }

    @media (min-width: 768px) {
        .md\:my-8 {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .md\:rounded-b-md {
            border-bottom-right-radius: 0.375rem;
            border-bottom-left-radius: 0.375rem;
        }

        .md\:rounded-t-md {
            border-top-left-radius: 0.375rem;
            border-top-right-radius: 0.375rem;
        }
    }

    @media (min-width: 1024px) {
        .lg\:my-10 {
            margin-top: 2.5rem;
            margin-bottom: 2.5rem;
        }
    }
</style>
<body>
    <section class="max-w-2xl mx-auto md:my-8 lg:my-10">
        <header class="flex justify-center bg-slate-100 p-6 border-b-2 border-indigo-500 md:rounded-t-md">
            <a href="https://www.movil-max.com/">
                <img class="w-40 sm:w-52"
                    src="data:image/png;base64,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"
                    alt="Logo de Movilmax">
            </a>
        </header>

        <main>
            <h2 class="text-gray-700 font-bold text-xl sm:text-2xl text-center pt-4 pb-1 px-4">¡Hola!</h2>
            <p class="mt-2 mb-2 text-gray-600 px-4 pt-1 text-center leading-6">
                Se te creó una solicitud de firma de documentos de manera electrónica. <span
                    class="font-semibold ">Completa el proceso de firma a la brevedad posible. </span>Por favor, haz
                clic en el siguiente botón para revisar y firmar los documentos correspondientes.
            </p>
            <div class="flex justify-center mt-7">
                <a href="#"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 disabled:opacity-50 disabled:pointer-events-none">
                    <svg class="shrink-0 size-4" data-slot="icon" aria-hidden="true" width="24" height="24"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    Ir a firmar
                </a>
            </div>
            <p class="text-gray-600 text-center text-base pt-9 pb-5  leading-5">
                Gracias por su atención <br>
                <span class="text-sm font-semibold text-gray-400">- Movilmax Team -</span>
            </p>
        </main>
        <footer class="py-6 px-4 bg-gray-700 md:rounded-b-md">
            <p class="text-white text-sm">
                Si tienes alguna pregunta o necesitas ayuda, no dudes de ponerte en contacto con nuestro equipo de
                soporte <a href="https://www.movil-max.com/" class="text-indigo-400 hover:underline"
                    target="_blank">info@movil-max.com</a>.
                Este correo electrónico es una notificación. No responda.
            </p>
            <p class="mt-6 text-white text-sm font-semibold text-center italic">© 2024 Movilmax. Todos los derechos
                reservados.</p>
        </footer>
    </section>
</body>

</html>
