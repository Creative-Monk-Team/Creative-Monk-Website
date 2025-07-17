<?php
/**
 * Template Name: LWDTemplate
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg"
    data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about_hero_bg.jpeg">
    <div class="container">
        <div class="cs-page_heading_in">
            <h1 class="cs-page_title cs-font_50 cs-white_color">Larval Web Development</h1>
        </div>
    </div>
</div>


<div class="container mx-auto flex flex-col items-center py-20">
    <h2 class="text-center ">What is Laraval Web Development?</h2>
    <p class="text-white/25 text-center text-lg">Laraval web development is a renowned PHP web application framework
        known for its elegance, simplicity, and robust features. It follows the Model-View-Controller (MVC)
        architectural pattern, making web development more structured and efficient. Laravel empowers developers to
        create sophisticated web applications with ease, thanks to its rich set of tools and libraries.</p>
</div>

<div class="container mx-auto py-10">
    <h2 class="text-center ">10 Reasons Why Laravel Is the Best PHP Framework For 2023</h2>
    <p class="text-white/25 text-center text-lg">Laraval web development continues to stand out as the leading PHP
        framework for 2023, thanks to its exceptional features and developer-friendly approach. This framework offers
        remarkable advantages, making it the top choice for modern web development.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap10 md:gap-20 mt-20">
        <div class="box-item">
            <div class="flip-box">
                <div class="flip-box-front bg-black h-full w-full text-center">
                    <div class="  text-white z-10 h-full">
                        <div class="flex flex-col items-center justify-center p-10 h-full">
                            <h1 id="head mb-10">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="h-24 w-24" x="0" y="0" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <path
                                            d="M366 396c-5.52 0-10 4.48-10 10s4.48 10 10 10 10-4.48 10-10-4.48-10-10-10z"
                                            fill="#ff6600" opacity="1" data-original="#000000"></path>
                                        <path
                                            d="m390.622 363.663-47.53-15.84-17.063-34.127c15.372-15.646 26.045-36.348 29.644-57.941L357.801 243H376c16.542 0 30-13.458 30-30v-63C406 67.29 338.71 0 256 0c-82.922 0-150 67.097-150 150v63c0 13.036 8.361 24.152 20 28.28V253c0 16.542 13.458 30 30 30h8.782a108.487 108.487 0 0 0 16.774 25.974 103.947 103.947 0 0 0 4.406 4.741l-17.054 34.108-47.531 15.841C66.112 382.092 26 440.271 26 502c0 5.523 4.477 10 10 10h440c5.522 0 10-4.477 10-10 0-61.729-40.111-119.908-95.378-138.337zM386 213c0 5.514-4.486 10-10 10h-15.262c2.542-19.69 4.236-40.643 4.917-61.28.02-.582.036-1.148.054-1.72H386v53zm-250 10c-5.514 0-10-4.486-10-10v-53h20.298c.033 1.043.068 2.091.107 3.146l.004.107v.009c.7 20.072 2.372 40.481 4.856 59.737H136V223zm20 40c-5.514 0-10-4.486-10-10v-10h8.198l2.128 12.759a105.57 105.57 0 0 0 1.482 7.241H156zm-9.983-123H126.38C131.445 72.979 187.377 20 256 20c68.318 0 124.496 52.972 129.619 120h-19.635c-.72-55.227-45.693-100-101.033-100h-17.9c-55.339 0-100.315 44.773-101.034 100zM247.05 60h17.9c44.809 0 81.076 36.651 81.05 81.41 0 3.147-.025 5.887-.078 8.38l-.001.098-12.508-1.787c-33.98-4.852-66.064-20.894-90.342-45.172A10.003 10.003 0 0 0 236 100c-26.856 0-52.564 12.236-69.558 32.908C170.63 92.189 205.053 60 247.05 60zm-68.51 203c-5.006-16.653-10.734-65.653-12-97.053l13.459-17.946c12.361-16.476 31.592-26.713 52.049-27.888 26.917 25.616 61.739 42.532 98.537 47.786l14.722 2.104c-.984 20.885-2.995 41.843-5.876 61.118l-.003.02c-.916 6.197-1.638 10.185-3.482 21.324-5.296 31.765-28.998 60.49-60.287 68.313a81.338 81.338 0 0 1-39.313 0c-19.537-4.884-37.451-18.402-49.012-37.778h20.386c4.128 11.639 15.243 20 28.28 20h20c16.575 0 30-13.424 30-30 0-16.542-13.458-30-30-30h-20c-13.327 0-24.278 8.608-28.297 20H178.54zm56.619 78.016A101.171 101.171 0 0 0 256 343.2c5.471 0 10.943-.458 16.353-1.346l-17.67 18.687-19.524-19.525zm5.776 34.063-31.718 33.542a381.013 381.013 0 0 1-22.389-51.917l11.911-23.822 42.196 42.197zm70.631-45.585 13.604 27.209a380.908 380.908 0 0 1-22.392 51.933l-33.948-33.948 42.736-45.194zM226 273c0-5.521 4.478-10 10-10h20c5.514 0 10 4.486 10 10 0 5.522-4.479 10-10 10h-20c-5.514 0-10-4.486-10-10zM46.4 492c3.963-49.539 36.932-94.567 81.302-109.363l42.094-14.028a400.869 400.869 0 0 0 28.463 61.74l.056.101.001.002a400.974 400.974 0 0 0 27.372 41.799L237.99 492H46.4zm209.6-8.914-13.562-21.773a10.133 10.133 0 0 0-.486-.711 381.284 381.284 0 0 1-22.532-33.662l35.663-37.714 37.578 37.578A380.863 380.863 0 0 1 270.05 460.6c-.49.653.205-.376-14.05 22.486zM274.01 492l12.301-19.748a400.826 400.826 0 0 0 27.564-42.132c.05-.088.097-.178.147-.266l.018-.032a400.543 400.543 0 0 0 28.164-61.213l42.093 14.028c44.371 14.796 77.34 59.824 81.303 109.363H274.01z"
                                            fill="#ff6600" opacity="1" data-original="#000000"></path>
                                        <path
                                            d="M435.546 451.531c-6.683-13.377-16.472-25.261-28.309-34.367-4.378-3.369-10.656-2.55-14.023 1.828-3.368 4.378-2.549 10.656 1.828 14.024 9.454 7.273 17.272 16.766 22.611 27.453 2.473 4.949 8.483 6.941 13.415 4.477 4.94-2.468 6.945-8.474 4.478-13.415z"
                                            fill="#ff6600" opacity="1" data-original="#000000"></path>
                                    </g>
                                </svg>
                            </h1>
                            <p> <span style="font-size: 25px;">
                                    MVC Support and Object-Oriented Approach
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-box-back bg-orange-500 h-full w-full text-center text-center">
                    <div class="inner color-white">
                        <div class="text-white p-10">
                            Laravel's foundation rests on the Model-View-Controller (MVC) architectural pattern. This
                            separation of concerns streamlines development by dividing it into distinct modules. Models
                            represent the application's data, views handle the presentation, and controllers manage user
                            interactions. This structured approach ensures code organization, reusability, and
                            maintainability.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-item">
            <div class="flip-box">
                <div class="flip-box-front bg-black h-full w-full text-center">
                    <div class="  text-white z-10 h-full">
                        <div class="flex flex-col items-center justify-center p-10 h-full">
                            <h1 id="head mb-10">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="h-24 w-24" x="0" y="0" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M399.953 235.191 400 99.992 200 0 0 100v132.465c-.078 82.953 41.383 160.437 110.441 206.398L200 498.543l68.992-45.957c37.29 47.766 101.703 65.066 157.906 42.414 56.207-22.652 90.622-79.781 84.372-140.055-6.254-60.277-51.66-109.125-111.317-119.761zM200 479.344l-80.68-53.778C54.707 382.57 15.918 310.074 16 232.465V109.887l184-92 184 92v123.465c-2.656-.16-5.29-.407-8-.407s-5.352.246-8 .407V119.754L200 35.762l-168 84v112.703c-.059 72.254 36.055 139.738 96.2 179.773l71.8 47.84 52.336-34.871a135.571 135.571 0 0 0 7.566 14.211zm46.352-69.367L200 440.855l-62.918-41.925c-3.105-2.075-6.113-4.25-9.082-6.48v-71.505h-16v58.078a199.844 199.844 0 0 1-24-26.64v-46.488a24 24 0 0 1 18.152-23.27l54.254-13.602c1.742 17.348 14.528 31.559 31.594 35.122v32.8h16v-32.8c17.066-3.56 29.848-17.774 31.586-35.122l35.613 8.946c-32.469 35.707-43.46 86.004-28.847 132zM160 168.945h22.113a84.267 84.267 0 0 0 35.719-8H220l20 26.664v33.336l-26.664 20h-26.672l-26.664-20zm-15.336-16a31.299 31.299 0 0 1 17.137-23.12 80.785 80.785 0 0 1 56.176-3.536l1.84 2.656H232a8 8 0 0 1 8 8v24l-12-16h-13.887l-1.687.84a68.217 68.217 0 0 1-30.313 7.16zm79.336 100v12c0 13.254-10.746 24-24 24s-24-10.746-24-24v-12l5.336 4h37.328zm16-.312v-11.688l16-12v-92c0-13.257-10.746-24-24-24h-5.32c-11.575-7.035-40.39-8.457-60.801-2.074-22.887 5.621-38.695 26.52-37.879 50.074v8h16v60l16 12v11.649l-57.742 14.52c-17.797 4.44-30.278 20.44-30.258 38.78v21.602a199.786 199.786 0 0 1-24-95.031V129.648l152-76 152 76v102.817c0 .918-.055 1.832-.063 2.742a135.367 135.367 0 0 0-63.296 29.648zm136 236.312c-66.273 0-120-53.726-120-120 0-66.277 53.727-120 120-120s120 53.723 120 120c-.074 66.243-53.758 119.922-120 120zm0 0"
                                            fill="#ff6600" opacity="1" data-original="#000000" class=""></path>
                                        <path
                                            d="M416 136.945h96v16h-96zM416 168.945h64v16h-64zM416 200.945h32v16h-32zM346.543 363.29l-28.277-28.282-45.258 45.25 73.535 73.535 124.45-124.45-45.259-45.245zm0 67.878-50.91-50.91 22.633-22.625 28.277 28.277 79.2-79.2 22.632 22.626zm0 0"
                                            fill="#ff6600" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </h1>
                            <p> <span style="font-size: 25px;">
                                    Built-In Authentication and Authorization
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-box-back bg-orange-500 h-full w-full text-centertext-center">
                    <div class="inner color-white">
                        <div class="text-white p-10">
                            Laravel simplifies the complex tasks of user authentication and authorization. It provides
                            built-in features that enable developers to effortlessly add user registration, login, and
                            access control to their applications. By handling these crucial aspects, Laravel lets
                            developers focus on creating application-specific features, saving both time and effort.

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-item">
            <div class="flip-box">
                <div class="flip-box-front bg-black h-full w-full text-center">
                    <div class="  text-white z-10 h-full">
                        <div class="flex flex-col items-center justify-center p-10 h-full">
                            <h1 id="head mb-10">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="h-24 w-24" x="0" y="0" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M193.875 7.5h31.063M162.812 7.5h31.063v93.188M100.687 25.584V12.5a5 5 0 0 1 5-5h26.063M100.687 100.688V60.584M160.312 38.562H134.25a2.5 2.5 0 0 1-2.5-2.5V7.5h31.062v28.562a2.5 2.5 0 0 1-2.5 2.5zM256 7.5h26.062a5 5 0 0 1 5 5v88.188M253.5 38.562h-26.062a2.5 2.5 0 0 1-2.5-2.5V7.5H256v28.562a2.5 2.5 0 0 1-2.5 2.5zM287.063 162.812h31.062V256M224.938 256v-88.188a5 5 0 0 1 5-5H256M284.562 193.875H258.5a2.5 2.5 0 0 1-2.5-2.5v-28.562h31.062v28.562a2.5 2.5 0 0 1-2.5 2.5zM380.25 162.812h26.062a5 5 0 0 1 5 5V256M318.125 162.812h31.063M377.75 193.875h-26.062a2.5 2.5 0 0 1-2.5-2.5v-28.562h31.062v28.562a2.5 2.5 0 0 1-2.5 2.5zM224.938 318.125H256v93.187M162.812 411.312v-88.188a5 5 0 0 1 5-5h26.063M222.437 349.188h-26.062a2.5 2.5 0 0 1-2.5-2.5v-28.562h31.062v28.562a2.5 2.5 0 0 1-2.5 2.5zM318.125 318.125h26.062a5 5 0 0 1 5 5v88.188M256 318.125h31.062M315.625 349.188h-26.062a2.5 2.5 0 0 1-2.5-2.5v-28.562h31.062v28.562a2.5 2.5 0 0 1-2.5 2.5zM162.812 162.812h26.062a5 5 0 0 1 5 5V256M100.687 256v-88.188a5 5 0 0 1 5-5h26.063M160.312 193.875H134.25a2.5 2.5 0 0 1-2.5-2.5v-28.562h31.062v28.562a2.5 2.5 0 0 1-2.5 2.5zM473.438 411.312H38.562M38.562 473.438h21.062c5.523 0 10-4.477 10-10v-16.062a5 5 0 0 1 5-5h362.75a5 5 0 0 1 5 5v16.062c0 5.523 4.477 10 10 10h21.062M473.438 256H38.562"
                                            style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                            fill="none" stroke="#ff6600" stroke-width="15" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000"
                                            opacity="1" class=""></path>
                                        <path
                                            d="M38.562 318.125h21.062c5.523 0 10-4.477 10-10v-16.062a5 5 0 0 1 5-5h362.75a5 5 0 0 1 5 5v16.062c0 5.523 4.477 10 10 10h21.062M38.562 162.812h21.062c5.523 0 10-4.477 10-10V136.75a5 5 0 0 1 5-5h362.75a5 5 0 0 1 5 5v16.062c0 5.523 4.477 10 10 10h21.062M38.562 392.484V499.5a5 5 0 0 1-5 5H12.5a5 5 0 0 1-5-5v-487a5 5 0 0 1 5-5h21.062a5 5 0 0 1 5 5v343.984M478.438 504.5H499.5a5 5 0 0 0 5-5v-487a5 5 0 0 0-5-5h-21.062a5 5 0 0 0-5 5v487a5 5 0 0 0 5 5z"
                                            style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                            fill="none" stroke="#ff6600" stroke-width="15" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000"
                                            opacity="1" class=""></path>
                                        <path
                                            d="M162.798 131.75a156.233 156.233 0 0 0-31.059 31.062M380.261 162.812a156.206 156.206 0 0 0-31.059-31.062M349.188 380.26c29.826-22.403 51.323-55.294 59.018-93.198M103.795 287.062c7.694 37.904 29.192 70.795 59.018 93.198M473.438 100.688H372.75M334.392 100.688H38.562"
                                            style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                            fill="none" stroke="#ff6600" stroke-width="15" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000"
                                            opacity="1" class=""></path>
                                    </g>
                                </svg>
                            </h1>
                            <p> <span style="font-size: 25px;"> Packaging System
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-box-back bg-orange-500 h-full w-full text-centertext-center">
                    <div class="inner color-white">
                        <div class="text-white p-10">
                            Laravel's packaging system, known as Composer, simplifies the integration of pre-built
                            components, libraries, and third-party packages into your projects. This modularity enhances
                            code sharing, accelerates project scalability, and makes it easy to leverage a wide range of
                            functionality. It's a powerful tool for building custom, feature-rich applications while
                            maintaining code flexibility.

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="box-item">
            <div class="flip-box">
                <div class="flip-box-front bg-black h-full w-full text-center">
                    <div class="  text-white z-10 h-full">
                        <div class="flex flex-col items-center justify-center p-10 h-full">
                            <h1 id="head mb-10">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="h-24 w-24" x="0" y="0" viewBox="0 0 60 60"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M53 36.586V32a3 3 0 0 0-3-3H31v-5h6a2 2 0 0 0 2-2V8.414A2.015 2.015 0 0 0 38.414 7L32 .586A2.015 2.015 0 0 0 30.586 0H23a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h6v5H10a3 3 0 0 0-3 3v4H2a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V44.414A2.015 2.015 0 0 0 17.414 43L11 36.586A2.015 2.015 0 0 0 9.586 36H9v-4a1 1 0 0 1 1-1h19v5h-6a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V44.414A2.015 2.015 0 0 0 38.414 43L32 36.586a2.021 2.021 0 0 0-1-.54V31h19a1 1 0 0 1 1 1v4h-7a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V44.414A2.015 2.015 0 0 0 59.414 43ZM35.586 7H32V3.414ZM30 2v5a2 2 0 0 0 2 2h5v7H23V2Zm-7 16h14v4H23ZM9 38v5a2 2 0 0 0 2 2h5v7H2V38ZM2 58v-4h14v4Zm12.586-15H11v-3.586ZM30 38v5a2 2 0 0 0 2 2h5v7H23V38Zm-7 20v-4h14v4Zm12.586-15H32v-3.586ZM53 39.414 56.586 43H53ZM51 38v5a2 2 0 0 0 2 2h5v7H44V38Zm-7 20v-4h14v4Z"
                                            fill="#ff6600" opacity="1" data-original="#000000"></path>
                                    </g>
                                </svg>
                            </h1>
                            <p> <span style="font-size: 25px;">
                                    Multiple File System
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-box-back bg-orange-500 h-full w-full text-centertext-center">
                    <div class="inner color-white">
                        <div class="text-white p-10">
                            Laravel supports multiple file systems, allowing developers to interact seamlessly with
                            various storage solutions, including cloud storage providers and local file systems. This
                            versatility simplifies the handling of files, making it easy to store and access assets for
                            your applications.

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-item">
            <div class="flip-box">
                <div class="flip-box-front bg-black h-full w-full text-center">
                    <div class="  text-white z-10 h-full">
                        <div class="flex flex-col items-center justify-center p-10 h-full">
                            <h1 id="head mb-10">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="h-24 w-24" x="0" y="0" viewBox="0 0 682.667 682.667"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <defs>
                                            <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                <path d="M0 512h512V0H0Z" fill="#ff6600" opacity="1"
                                                    data-original="#000000"></path>
                                            </clipPath>
                                        </defs>
                                        <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                            <path
                                                d="M0 0a5.987 5.987 0 0 1-4.522 5.816C-9.524 7.067-18.431 8.76-30 8.76s-20.476-1.693-25.478-2.944A5.987 5.987 0 0 1-60 0v-18.48a5.986 5.986 0 0 1 4.522-5.816C-50.476-25.547-41.569-27.24-30-27.24s20.476 1.693 25.478 2.944A5.986 5.986 0 0 1 0-18.48Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(466 251.62)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path d="M0 0v100.63m0 41V180"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(436 121)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path
                                                d="M0 0a5.987 5.987 0 0 1-4.522 5.816C-9.524 7.067-18.431 8.76-30 8.76s-20.476-1.693-25.478-2.944A5.987 5.987 0 0 1-60 0v-18.48a5.986 5.986 0 0 1 4.522-5.816C-50.476-25.547-41.569-27.24-30-27.24s20.476 1.693 25.478 2.944A5.986 5.986 0 0 1 0-18.48Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(376 272.62)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path d="M0 0v121.38m0 41V180"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(346 121)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path
                                                d="M0 0a5.985 5.985 0 0 0-4.522-5.815C-9.524-7.066-18.431-8.76-30-8.76s-20.476 1.694-25.478 2.945A5.985 5.985 0 0 0-60 0v18.48a5.986 5.986 0 0 0 4.522 5.816C-50.476 25.547-41.569 27.24-30 27.24s20.476-1.693 25.478-2.944A5.986 5.986 0 0 0 0 18.48Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(286 198.14)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path d="M0 0v64.383m0 41V180"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(256 121)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path
                                                d="M0 0a5.985 5.985 0 0 1-4.522 5.815C-9.524 7.067-18.431 8.76-30 8.76s-20.476-1.693-25.478-2.945A5.985 5.985 0 0 1-60 0v-18.48a5.986 5.986 0 0 1 4.522-5.816C-50.476-25.547-41.569-27.24-30-27.24s20.476 1.693 25.478 2.944A5.986 5.986 0 0 1 0-18.48Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(196 178.24)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path d="M0 0v26.806m0 41V180"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(166 121)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path
                                                d="M0 0a5.987 5.987 0 0 1-4.522 5.816C-9.524 7.067-18.431 8.76-30 8.76s-20.476-1.693-25.478-2.944A5.987 5.987 0 0 1-60 0v-18.48a5.986 5.986 0 0 1 4.522-5.816C-50.476-25.547-41.569-27.24-30-27.24s20.476 1.693 25.478 2.944A5.986 5.986 0 0 1 0-18.48Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(106 196.62)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path d="M0 0v45.429m0 41V180"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(76 121)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path d="M0 0v222.808c0 16.5-13.5 30-30 30h-299.882"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(504.5 183.192)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path d="M0 0v-106.38c0-16.5 13.5-30 30-30h437c16.5 0 30 13.5 30 30v47.192"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(7.5 212.38)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path d="M0 0h-107.118c-16.5 0-30-13.5-30-30v-163.62"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(144.618 436)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path
                                                d="M0 0v15c0 4.125-3.375 7.5-7.5 7.5h-45c-4.125 0-7.5-3.375-7.5-7.5V0c0-4.125 3.375-7.5 7.5-7.5h45C-3.375-7.5 0-4.125 0 0Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(106 368.5)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path
                                                d="M0 0v15c0 4.125-3.375 7.5-7.5 7.5h-45c-4.125 0-7.5-3.375-7.5-7.5V0c0-4.125 3.375-7.5 7.5-7.5h45C-3.375-7.5 0-4.125 0 0Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(196 368.5)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path
                                                d="M0 0v15c0 4.125-3.375 7.5-7.5 7.5h-45c-4.125 0-7.5-3.375-7.5-7.5V0c0-4.125 3.375-7.5 7.5-7.5h45C-3.375-7.5 0-4.125 0 0Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(286 368.5)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path
                                                d="M0 0v15c0 4.125-3.375 7.5-7.5 7.5h-45c-4.125 0-7.5-3.375-7.5-7.5V0c0-4.125 3.375-7.5 7.5-7.5h45C-3.375-7.5 0-4.125 0 0Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(376 368.5)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                            <path
                                                d="M0 0v15c0 4.125-3.375 7.5-7.5 7.5h-45c-4.125 0-7.5-3.375-7.5-7.5V0c0-4.125 3.375-7.5 7.5-7.5h45C-3.375-7.5 0-4.125 0 0Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(466 368.5)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1"></path>
                                        </g>
                                    </g>
                                </svg>
                            </h1>
                            <p> <span style="font-size: 25px;"> Artisan Console
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-box-back bg-orange-500 h-full w-full text-centertext-center">
                    <div class="inner color-white">
                        <div class="text-white p-10">
                            Artisan, Laravel's command-line tool, is a developer's best friend. It automates repetitive
                            and routine tasks, from generating boilerplate code to managing database migrations and
                            more. With Artisan, you can streamline your project's workflows, enhance productivity, and
                            save valuable development time.

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="box-item">
            <div class="flip-box">
                <div class="flip-box-front bg-black h-full w-full text-center">
                    <div class="  text-white z-10 h-full">
                        <div class="flex flex-col items-center justify-center p-10 h-full">
                            <h1 id="head mb-10">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="h-24 w-24" x="0" y="0" viewBox="0 0 1000 1000"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M326.43 903.08a16 16 0 0 1-16-16v-35.25H167.21a16.18 16.18 0 0 1-2.63.22H100a16 16 0 0 1-16-16v-254a16 16 0 0 1 16-16h74.3a16 16 0 0 1 16 16v163.53h120.13v-35.25a16 16 0 0 1 23.9-13.92L490 784.79a16 16 0 0 1 0 27.83L334.33 901a16 16 0 0 1-7.9 2.08zm-161.85-83.25h161.85a16 16 0 0 1 16 16v23.77l107.28-60.89-107.28-60.9v23.77a16 16 0 0 1-16 16H174.3a16 16 0 0 1-16-16V598.06H116v222h46a16.38 16.38 0 0 1 2.58-.23zM900 433.94h-74.3a16 16 0 0 1-16-16V254.42H689.57v35.25a16 16 0 0 1-23.9 13.92L510 215.21a16 16 0 0 1 0-27.83L665.67 99a16 16 0 0 1 23.9 13.92v35.25h143.22a16.18 16.18 0 0 1 2.63-.22H900a16 16 0 0 1 16 16v254a16 16 0 0 1-16 15.99zm-58.3-32H884V180h-46a16.38 16.38 0 0 1-2.63.22h-161.8a16 16 0 0 1-16-16V140.4l-107.28 60.89 107.28 60.9v-23.77a16 16 0 0 1 16-16H825.7a16 16 0 0 1 16 16zM567.9 831.32a16 16 0 0 1-16-16V555.7a16 16 0 0 1 32 0v259.62a16 16 0 0 1-16 16zM888.86 831.32a16 16 0 0 1-16-16V555.7a16 16 0 0 1 32 0v259.62a16 16 0 0 1-16 16z"
                                            fill="#ff6600" opacity="1" data-original="#000000"></path>
                                        <path
                                            d="M728.38 615.3c-44.24 0-86-4.74-117.67-13.33-39-10.6-58.81-26.17-58.81-46.27s19.79-35.67 58.81-46.27c31.64-8.6 73.43-13.33 117.67-13.33s86 4.73 117.67 13.33c39 10.6 58.81 26.17 58.81 46.27s-19.78 35.67-58.81 46.3c-31.64 8.56-73.43 13.3-117.67 13.3zM584.7 555.7c2.8 2.86 12.41 10.23 41.34 17.16 28.11 6.73 64.46 10.44 102.34 10.44s74.23-3.71 102.35-10.44c28.92-6.93 38.53-14.3 41.33-17.16-2.8-2.86-12.41-10.23-41.33-17.16-28.12-6.73-64.47-10.44-102.35-10.44s-74.23 3.71-102.38 10.44c-28.89 6.93-38.5 14.3-41.3 17.16zM728.38 702.5c-44.24 0-86-4.74-117.67-13.33-39-10.61-58.81-26.17-58.81-46.27a16 16 0 0 1 32-.95c1.23 1.64 9 10.16 42.17 18.1 28.11 6.74 64.46 10.45 102.34 10.45s74.23-3.71 102.35-10.45c33.15-7.94 40.93-16.46 42.16-18.1a16 16 0 0 1 32 .95c0 20.1-19.78 35.66-58.81 46.27-31.7 8.59-73.49 13.33-117.73 13.33zM728.38 789.69c-11.72 0-23.43-.34-34.79-1h-.2c-36.64-2.15-70.17-7.78-94.43-15.85-31.23-10.39-47.06-24.77-47.06-42.74a16 16 0 0 1 32-.94c1.08 1.44 7.18 8.16 31.31 15.23 21.35 6.25 49 10.52 79.92 12.34h.19a575.25 575.25 0 0 0 66.18 0h.21c30.93-1.82 58.56-6.09 79.9-12.34 24.13-7.07 30.23-13.79 31.31-15.23a16 16 0 0 1 32 .94c0 18-15.83 32.35-47.06 42.74-24.25 8.07-57.79 13.7-94.43 15.85h-.21a606 606 0 0 1-34.84 1zM728.38 874.92c-44.24 0-86-4.74-117.67-13.33-39-10.6-58.81-26.17-58.81-46.27a16 16 0 0 1 32-1c1.23 1.64 9 10.17 42.17 18.11 28.11 6.73 64.46 10.44 102.34 10.44s74.23-3.71 102.35-10.44c33.15-7.94 40.93-16.47 42.16-18.11a16 16 0 0 1 32 1c0 20.1-19.78 35.67-58.81 46.27-31.7 8.59-73.49 13.33-117.73 13.33z"
                                            fill="#ff6600" opacity="1" data-original="#000000"></path>
                                        <path
                                            d="M661.44 658.9h-2.78a16 16 0 0 1 0-32h2.78a16 16 0 0 1 0 32zM702.72 658.9h-2.78a16 16 0 0 1 0-32h2.78a16 16 0 0 1 0 32zM744.46 658.9h-2.78a16 16 0 0 1 0-32h2.78a16 16 0 0 1 0 32zM661.44 743.44h-2.78a16 16 0 1 1 0-32h2.78a16 16 0 0 1 0 32zM702.72 743.44h-2.78a16 16 0 0 1 0-32h2.78a16 16 0 0 1 0 32zM744.46 743.44h-2.78a16 16 0 1 1 0-32h2.78a16 16 0 0 1 0 32zM661.44 828h-2.78a16 16 0 1 1 0-32h2.78a16 16 0 0 1 0 32zM702.72 828h-2.78a16 16 0 0 1 0-32h2.78a16 16 0 0 1 0 32zM744.46 828h-2.78a16 16 0 1 1 0-32h2.78a16 16 0 0 1 0 32zM111.14 457.57a16 16 0 0 1-16-16V182a16 16 0 0 1 32 0v259.57a16 16 0 0 1-16 16zM432.1 457.57a16 16 0 0 1-16-16V182a16 16 0 0 1 32 0v259.57a16 16 0 0 1-16 16z"
                                            fill="#ff6600" opacity="1" data-original="#000000"></path>
                                        <path
                                            d="M271.62 241.55c-44.24 0-86-4.73-117.67-13.33-39-10.6-58.81-26.17-58.81-46.27s19.78-35.66 58.81-46.27c31.64-8.59 73.43-13.33 117.67-13.33s86 4.74 117.67 13.33c39 10.61 58.81 26.17 58.81 46.27s-19.79 35.67-58.81 46.27c-31.64 8.6-73.43 13.33-117.67 13.33zM127.94 182c2.8 2.86 12.41 10.23 41.33 17.16 28.12 6.73 64.47 10.44 102.35 10.44s74.23-3.71 102.34-10.44c28.93-6.93 38.54-14.3 41.34-17.16-2.8-2.86-12.41-10.23-41.34-17.15-28.11-6.74-64.46-10.45-102.34-10.45s-74.23 3.71-102.35 10.45c-28.92 6.87-38.53 14.24-41.33 17.15zM271.62 328.75c-44.24 0-86-4.73-117.67-13.33-39-10.6-58.81-26.17-58.81-46.27a16 16 0 0 1 32-.95c1.23 1.64 9 10.17 42.16 18.11 28.12 6.73 64.47 10.44 102.35 10.44S345.85 293 374 286.31c33.16-7.94 40.94-16.47 42.17-18.11a16 16 0 0 1 32 .95c0 20.1-19.79 35.67-58.81 46.27-31.71 8.58-73.5 13.33-117.74 13.33zM271.62 416c-11.72 0-23.43-.34-34.78-1h-.21c-36.64-2.15-70.18-7.78-94.43-15.85-31.2-10.45-47.06-24.83-47.06-42.8a16 16 0 0 1 32-1c1.08 1.44 7.18 8.16 31.31 15.23 21.35 6.25 49 10.52 79.91 12.35h.2a575.25 575.25 0 0 0 66.18 0h.21c30.93-1.83 58.55-6.1 79.9-12.35 24.13-7.07 30.23-13.79 31.31-15.23a16 16 0 0 1 32 1c0 18-15.83 32.35-47.06 42.73-24.26 8.07-57.79 13.7-94.43 15.85h-.22c-11.45.68-23.11 1.07-34.83 1.07zM271.62 501.17c-44.24 0-86-4.73-117.67-13.33-39-10.6-58.81-26.17-58.81-46.27a16 16 0 0 1 32-.95c1.23 1.65 9 10.17 42.16 18.11 28.12 6.73 64.47 10.44 102.35 10.44s74.23-3.71 102.34-10.44c33.16-7.94 40.94-16.46 42.17-18.11a16 16 0 0 1 32 .95c0 20.1-19.79 35.67-58.81 46.27-31.7 8.6-73.49 13.33-117.73 13.33z"
                                            fill="#ff6600" opacity="1" data-original="#000000"></path>
                                        <path
                                            d="M204.68 285.15h-2.78a16 16 0 0 1 0-32h2.78a16 16 0 1 1 0 32zM246 285.15h-2.78a16 16 0 0 1 0-32H246a16 16 0 0 1 0 32zM287.7 285.15h-2.78a16 16 0 0 1 0-32h2.78a16 16 0 1 1 0 32zM204.68 369.69h-2.78a16 16 0 0 1 0-32h2.78a16 16 0 0 1 0 32zM246 369.69h-2.78a16 16 0 0 1 0-32H246a16 16 0 0 1 0 32zM287.7 369.69h-2.78a16 16 0 0 1 0-32h2.78a16 16 0 0 1 0 32zM204.68 454.23h-2.78a16 16 0 1 1 0-32h2.78a16 16 0 1 1 0 32zM246 454.23h-2.78a16 16 0 0 1 0-32H246a16 16 0 0 1 0 32zM287.7 454.23h-2.78a16 16 0 0 1 0-32h2.78a16 16 0 1 1 0 32z"
                                            fill="#ff6600" opacity="1" data-original="#000000"></path>
                                    </g>
                                </svg>
                            </h1>
                            <p> <span style="font-size: 25px;">
                                    Eloquent ORM
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-box-back bg-orange-500 h-full w-full text-centertext-center">
                    <div class="inner color-white">
                        <div class="text-white p-10">
                            Eloquent ORM (Object-Relational Mapping) is Laravel's elegant and expressive database
                            manipulation tool. With a simple, intuitive syntax, developers can interact with databases
                            using an active record implementation. This ORM simplifies database queries, making it
                            easier to work with data and ensuring a clean, efficient database layer for your
                            applications.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-item">
            <div class="flip-box">
                <div class="flip-box-front bg-black h-full w-full text-center">
                    <div class="  text-white z-10 h-full">
                        <div class="flex flex-col items-center justify-center p-10 h-full">
                            <h1 id="head mb-10">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="h-24 w-24" x="0" y="0" viewBox="0 0 60 60"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M55.5 60h-51A4.505 4.505 0 0 1 0 55.5v-51C0 2.019 2.019 0 4.5 0h51C57.981 0 60 2.019 60 4.5v51c0 2.481-2.019 4.5-4.5 4.5zM4.5 2A2.503 2.503 0 0 0 2 4.5v51C2 56.878 3.122 58 4.5 58h51c1.379 0 2.5-1.122 2.5-2.5v-51C58 3.122 56.878 2 55.5 2z"
                                            fill="#ff6600" opacity="1" data-original="#000000" class=""></path>
                                        <path
                                            d="M9 10H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1zM6 8h2V6H6zM17 10h-4a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1zm-3-2h2V6h-2zM25 10h-4a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1zm-3-2h2V6h-2z"
                                            fill="#ff6600" opacity="1" data-original="#000000" class=""></path>
                                        <path
                                            d="M59 14H1a1 1 0 0 1-1-1V4.5C0 2.019 2.019 0 4.5 0h51C57.981 0 60 2.019 60 4.5V13a1 1 0 0 1-1 1zM2 12h56V4.5C58 3.122 56.878 2 55.5 2h-51A2.503 2.503 0 0 0 2 4.5zM39 28H7a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h32a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1zM8 26h30v-6H8zM53 54H7a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h46a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1zM8 52h44v-4H8z"
                                            fill="#ff6600" opacity="1" data-original="#000000" class=""></path>
                                        <path
                                            d="M39 28h-8a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1zm-7-2h6v-6h-6zM11 42H7a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2zM21 42h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2zM32 42h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2zM43 42h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2zM53 42h-4a1 1 0 0 1 0-2h4a1 1 0 0 1 0 2zM11 38H7a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1zm-3-2h2v-2H8zM53 38h-4a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1zm-3-2h2v-2h-2zM43 38h-4a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1zm-3-2h2v-2h-2zM21 38h-4a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1zm-3-2h2v-2h-2zM32 38h-4a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1zm-3-2h2v-2h-2zM48 26c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z"
                                            fill="#ff6600" opacity="1" data-original="#000000" class=""></path>
                                        <path
                                            d="M53 28a.997.997 0 0 1-.707-.293l-2.881-2.881a.999.999 0 1 1 1.414-1.414l2.881 2.881A.999.999 0 0 1 53 28z"
                                            fill="#ff6600" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </h1>
                            <p> <span style="font-size: 25px;">

                                    Templating Engine
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-box-back bg-orange-500 h-full w-full text-centertext-center">
                    <div class="inner color-white">
                        <div class="text-white p-10">
                            Laravel's Blade templating engine is a powerful yet user-friendly tool for creating dynamic
                            and reusable templates. Its simple, expressive syntax enables developers to craft
                            sophisticated user interfaces with ease. Blade encourages code separation and enhances the
                            clarity and maintainability of your views, making it a valuable asset for developers and
                            designers.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-item">
            <div class="flip-box">
                <div class="flip-box-front bg-black h-full w-full text-center">
                    <div class="  text-white z-10 h-full">
                        <div class="flex flex-col items-center justify-center p-10 h-full">
                            <h1 id="head mb-10">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="h-24 w-24" x="0" y="0" viewBox="0 0 682.667 682.667"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <defs>
                                            <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                <path d="M0 512h512V0H0Z" fill="#ff6600" opacity="1"
                                                    data-original="#000000"></path>
                                            </clipPath>
                                        </defs>
                                        <g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                            <path d="M0 0h146.148"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(351.044 347.748)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path d="M0 0h303.55"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(14.808 347.748)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path d="M0 0h-344.736c-13.808 0-25 11.193-25 25v207.157"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(384.544 7.5)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path d="M0 0h-43.853c-13.807 0-25-11.193-25-25v-158.206"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(83.66 455.55)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path d="M0 0h-101.162"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(232.274 455.55)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path
                                                d="M0 0v0c-13.104 0-23.726 10.622-23.726 23.726v50.449C-23.726 87.278-13.104 97.9 0 97.9s23.726-10.622 23.726-23.725V23.726C23.726 10.622 13.104 0 0 0Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(256 406.6)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path
                                                d="M0 0v0c-13.104 0-23.727 10.622-23.727 23.726v50.449C-23.727 87.278-13.104 97.9 0 97.9c13.104 0 23.726-10.622 23.726-23.725V23.726C23.726 10.622 13.104 0 0 0Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(107.387 406.6)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path
                                                d="M0 0v0c-13.104 0-23.726 10.622-23.726 23.726v50.449C-23.726 87.278-13.104 97.9 0 97.9s23.727-10.622 23.727-23.725V23.726C23.727 10.622 13.104 0 0 0Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(404.613 406.6)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path
                                                d="M0 0h-81.099a5.269 5.269 0 0 0-5.268 5.269v81.098a5.269 5.269 0 0 0 5.268 5.269H0a5.269 5.269 0 0 0 5.269-5.269V5.269A5.269 5.269 0 0 0 0 0Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(443.48 199.876)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path
                                                d="M0 0h-81.1a5.267 5.267 0 0 0-5.267 5.269v81.098a5.269 5.269 0 0 0 5.267 5.269H0a5.27 5.27 0 0 0 5.268-5.269V5.269A5.268 5.268 0 0 0 0 0Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(296.55 62.429)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path
                                                d="M0 0h-81.099a5.267 5.267 0 0 0-5.268 5.269v81.098a5.269 5.269 0 0 0 5.268 5.269H0a5.27 5.27 0 0 0 5.269-5.269V5.269A5.269 5.269 0 0 0 0 0Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(149.618 62.429)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path
                                                d="M0 0h-81.099a5.268 5.268 0 0 0-5.268 5.269v81.098a5.27 5.27 0 0 0 5.268 5.269H0a5.27 5.27 0 0 0 5.269-5.269V5.269A5.268 5.268 0 0 0 0 0Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(443.48 62.429)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path
                                                d="M0 0h-81.1a5.268 5.268 0 0 0-5.267 5.269v81.098a5.268 5.268 0 0 0 5.267 5.269H0a5.269 5.269 0 0 0 5.268-5.269V5.269A5.269 5.269 0 0 0 0 0Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(296.55 199.876)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path
                                                d="M0 0h-81.099a5.268 5.268 0 0 0-5.268 5.269v81.098a5.268 5.268 0 0 0 5.268 5.269H0a5.27 5.27 0 0 0 5.269-5.269V5.269A5.27 5.27 0 0 0 0 0Z"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(149.618 199.876)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path d="m0 0 21.748-21.366 50.648 50.993"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(97.32 245.694)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path d="m0 0 21.749-21.366 50.647 50.993"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(251 245.694)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path d="M0 0h-101.162"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(380.888 455.55)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                            <path
                                                d="M0 0h54.961c13.808 0 25 11.193 25 25v398.05c0 13.806-11.192 25-25 25H11.108"
                                                style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                transform="translate(417.231 7.5)" fill="none" stroke="#ff6600"
                                                stroke-width="15" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity=""
                                                data-original="#000000" opacity="1" class=""></path>
                                        </g>
                                    </g>
                                </svg>
                            </h1>
                            <p> <span style="font-size: 25px;">

                                    Task Scheduling
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-box-back bg-orange-500 h-full w-full text-centertext-center">
                    <div class="inner color-white">
                        <div class="text-white p-10">
                            Laravel provides a robust task scheduling system that automates the execution of routine
                            tasks. It's particularly useful for tasks like sending emails, processing queues, and
                            performing other recurring activities. This feature ensures your application runs smoothly,
                            manages tasks efficiently, and maintains a high level of user satisfaction.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-item">
            <div class="flip-box">
                <div class="flip-box-front bg-black h-full w-full text-center">
                    <div class="  text-white z-10 h-full">
                        <div class="flex flex-col items-center justify-center p-10 h-full">
                            <h1 id="head mb-10">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="h-24 w-24" x="0" y="0" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M486.145 59.559H120.107c-14.255 0-25.852 11.598-25.852 25.853v23.196l-.12.02a7 7 0 0 0-5.748 6.889v15.961a93.593 93.593 0 0 0-18.805 7.801l-11.28-11.28a7.002 7.002 0 0 0-8.94-.803 114.608 114.608 0 0 0-28.978 28.978 7.001 7.001 0 0 0 .803 8.94l11.281 11.28a93.493 93.493 0 0 0-7.801 18.804H8.705a7.002 7.002 0 0 0-6.889 5.75c-1.204 6.619-1.813 13.517-1.813 20.5 0 6.964.61 13.852 1.813 20.471a7.002 7.002 0 0 0 6.889 5.75h15.96a93.203 93.203 0 0 0 7.801 18.813l-11.284 11.305a7 7 0 0 0-.793 8.942 114.885 114.885 0 0 0 28.973 28.942 6.997 6.997 0 0 0 8.94-.803l11.28-11.28a93.593 93.593 0 0 0 18.805 7.801v15.962a7.002 7.002 0 0 0 5.749 6.889l.119.02v19.311c0 14.255 11.597 25.853 25.852 25.853h138.897v15.108H228.73c-15.974 0-28.97 12.996-28.97 28.97v21.94a7.002 7.002 0 0 0 7.001 7.002h192.728a7.001 7.001 0 0 0 7.001-7.002v-21.94c0-15.974-12.996-28.97-28.97-28.97h-30.303v-15.108h138.926c14.255 0 25.853-11.598 25.853-25.853V85.411c.001-14.255-11.597-25.852-25.851-25.852zm-413.96 229.32a7.001 7.001 0 0 0-8.676.977L52.654 300.71a100.802 100.802 0 0 1-17.31-17.292l10.858-10.878a7.003 7.003 0 0 0 .967-8.682 79.363 79.363 0 0 1-10.265-24.75 7 7 0 0 0-6.826-5.445h-15.35c-.48-4.001-.723-8.09-.723-12.217 0-4.141.243-8.24.723-12.246h15.35c3.267 0 6.1-2.26 6.826-5.445a79.75 79.75 0 0 1 10.271-24.76 7.002 7.002 0 0 0-.978-8.677l-10.854-10.854a100.457 100.457 0 0 1 17.311-17.311l10.854 10.854a7.003 7.003 0 0 0 8.676.977 79.785 79.785 0 0 1 24.76-10.27 7.002 7.002 0 0 0 5.445-6.826v-15.357a101.322 101.322 0 0 1 24.463 0v15.357a7 7 0 0 0 5.445 6.826 79.858 79.858 0 0 1 24.789 10.27 7.003 7.003 0 0 0 8.676-.977l10.85-10.85a100.82 100.82 0 0 1 17.287 17.306l-10.854 10.854a7 7 0 0 0-.968 8.691c4.794 7.586 8.247 15.912 10.261 24.745a7.001 7.001 0 0 0 6.826 5.445h15.356a100.98 100.98 0 0 1 .001 24.463h-15.357a7.004 7.004 0 0 0-6.831 5.464 78.02 78.02 0 0 1-10.251 24.717 7.001 7.001 0 0 0 .958 8.696l10.857 10.878a101.134 101.134 0 0 1-17.286 17.287l-10.85-10.85a7.001 7.001 0 0 0-8.676-.977 79.838 79.838 0 0 1-24.789 10.27 7.002 7.002 0 0 0-5.445 6.826v15.357c-8.107.989-16.373.987-24.463 0v-15.357a7 7 0 0 0-5.445-6.826 79.74 79.74 0 0 1-24.758-10.267zm62.832 45.374.09-.015a7.002 7.002 0 0 0 5.749-6.889v-15.961a93.684 93.684 0 0 0 18.833-7.803l11.281 11.281a7.002 7.002 0 0 0 8.947.798 115.235 115.235 0 0 0 28.937-28.938 7 7 0 0 0-.793-8.942l-11.275-11.296a91.9 91.9 0 0 0 7.805-18.821h15.948a7.002 7.002 0 0 0 6.889-5.75 114.692 114.692 0 0 0 1.842-20.471c0-6.879-.62-13.776-1.842-20.5a7.002 7.002 0 0 0-6.889-5.75H204.58a93.013 93.013 0 0 0-7.796-18.811l11.273-11.273a7.001 7.001 0 0 0 .803-8.94 114.947 114.947 0 0 0-28.941-28.973 7 7 0 0 0-8.947.798l-11.281 11.281a93.718 93.718 0 0 0-18.833-7.803v-15.96a7.002 7.002 0 0 0-5.748-6.889l-.091-.016v-8.289h336.217v238.336H135.017zm242.504 74.28c8.252 0 14.967 6.714 14.967 14.966v14.938H213.763v-14.938c0-8.252 6.714-14.966 14.967-14.966h118.488zm-44.306-14.004h-60.208v-15.108h60.208zm164.778-40.961c0 6.533-5.315 11.849-11.849 11.849H120.107c-6.534 0-11.849-5.315-11.849-11.849v-17.674c2.124.118 4.251.184 6.378.184 2.126 0 4.254-.067 6.378-.185v9.766a7.002 7.002 0 0 0 7.001 7.002h350.221a7.002 7.002 0 0 0 7.002-7.002V93.32a7.002 7.002 0 0 0-7.002-7.002h-350.22a7.001 7.001 0 0 0-7.001 7.002v13.656a116.23 116.23 0 0 0-12.756-.002V85.411c0-6.533 5.315-11.849 11.849-11.849h366.038c6.533 0 11.849 5.315 11.849 11.849v268.157zM181.108 221.446c0-36.669-29.819-66.502-66.473-66.502-36.668 0-66.5 29.833-66.5 66.502 0 36.653 29.832 66.473 66.5 66.473 36.654 0 66.473-29.819 66.473-66.473zm-118.97 0c0-28.947 23.55-52.498 52.498-52.498 28.932 0 52.47 23.551 52.47 52.498 0 28.932-23.538 52.469-52.47 52.469-28.948 0-52.498-23.537-52.498-52.469zm37.398 16.658-9.893 9.91L68.02 226.43a7.002 7.002 0 0 1-.005-9.906l21.619-21.618 9.902 9.901-16.664 16.664zm30.2-33.354 9.902-9.901 21.59 21.59a7.002 7.002 0 0 1 .004 9.897l-21.586 21.622-9.91-9.894 16.644-16.671zm.361-14.054-17.424 65.118-13.527-3.619 17.424-65.118zm229.622-74.274h-79.88a7.001 7.001 0 0 0-7.001 7.002v79.909a7.002 7.002 0 0 0 7.001 7.002h79.88a7.001 7.001 0 0 0 7.001-7.002v-79.909a7 7 0 0 0-7.001-7.002zm-7.001 79.909H286.84v-65.905h65.877v65.905zm7.001 32.343h-79.88a7.001 7.001 0 0 0-7.001 7.002v79.88a7.002 7.002 0 0 0 7.001 7.002h79.88a7.001 7.001 0 0 0 7.001-7.002v-79.88a7 7 0 0 0-7.001-7.002zm-7.001 79.88H286.84v-65.876h65.877v65.876zm-47.502-124.97-14.579-19.212 11.155-8.465 9.421 12.415 27.303-30.801 10.479 9.289-32.962 37.186a7 7 0 0 1-10.817-.412zm-8.888 105.582 13.55-13.55-13.55-13.55 9.902-9.901 13.55 13.55 13.55-13.55 9.902 9.901-13.55 13.55 13.55 13.55-9.902 9.901-13.55-13.55-13.55 13.55zm85.785-141.62h76.989v14.004h-76.989zm0-31.124h76.989v14.004h-76.989zm0 143.376h76.989v14.004h-76.989zm0-31.124h76.989v14.004h-76.989z"
                                            fill="#ff6600" opacity="1" data-original="#000000"></path>
                                    </g>
                                </svg>
                            </h1>
                            <p> <span style="font-size: 25px;">
                                    Testing
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-box-back bg-orange-500 h-full w-full text-centertext-center">
                    <div class="inner color-white">
                        <div class="text-white p-10">
                            Laravel is built with testing in mind, offering support for unit testing. Developers can
                            write and execute tests to verify the reliability and functionality of their code. This
                            ensures that changes and updates don't introduce unintended issues, ultimately leading to
                            more stable and error-free applications.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-item">
            <div class="flip-box">
                <div class="flip-box-front bg-black h-full w-full text-center">
                    <div class="  text-white z-10 h-full">
                        <div class="flex flex-col items-center justify-center p-10 h-full">
                            <h1 id="head mb-10">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    class="h-24 w-24" x="0" y="0" viewBox="0 0 500 500"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M472.803 408.848 432.24 99.569c-.01-.074-.027-.146-.04-.22-.015-.089-.03-.179-.049-.267-.025-.113-.057-.223-.089-.332-.019-.067-.036-.134-.058-.2a5.381 5.381 0 0 0-.154-.402c-.015-.037-.028-.075-.044-.111a5.487 5.487 0 0 0-.927-1.427l-.004-.005-.029-.028a5.532 5.532 0 0 0-.36-.36c-.035-.033-.073-.062-.11-.093a5.47 5.47 0 0 0-.32-.26c-.045-.033-.091-.063-.137-.095a5.412 5.412 0 0 0-.33-.214c-.048-.028-.096-.054-.144-.08a5.374 5.374 0 0 0-1.429-.548l-.135-.03a5.343 5.343 0 0 0-.415-.066c-.051-.006-.102-.014-.153-.019a5.56 5.56 0 0 0-.393-.02c-.044-.002-.088-.008-.133-.008h-59.165c-2.665-17.828-18.078-31.547-36.637-31.547-18.56 0-33.972 13.719-36.637 31.547h-57.39c-2.664-17.828-18.077-31.547-36.637-31.547-18.559 0-33.97 13.719-36.636 31.547h-39.415a5.5 5.5 0 0 0-5.47 4.923l-7.81 73.918v.013l-6.539 61.883a5.5 5.5 0 0 0 10.94 1.155l6.02-56.981h289.603c.665 0 1.3-.124 1.89-.34l-23.74 224.708h-135.15a5.5 5.5 0 0 0 0 11H467.35a5.498 5.498 0 0 0 5.453-6.215zm-61.788-240.153H122.574l6.646-62.91h71.102a5.5 5.5 0 0 0 0-11h-25.457c2.532-11.73 12.982-20.548 25.457-20.548 14.364 0 26.048 11.685 26.048 26.048s-11.684 26.047-26.048 26.047a5.5 5.5 0 0 0 0 11c18.56 0 33.972-13.718 36.637-31.547h95.938a5.5 5.5 0 0 0 0-11h-27.369c2.532-11.73 12.982-20.548 25.458-20.548 14.363 0 26.047 11.685 26.047 26.048s-11.684 26.047-26.047 26.047a5.5 5.5 0 0 0 0 11c18.56 0 33.972-13.718 36.637-31.547h53.054l-6.736 63.759a5.467 5.467 0 0 0-2.926-.85z"
                                            fill="#ff6600" opacity="1" data-original="#000000"></path>
                                        <path
                                            d="M356.238 285.69h-36.111a5.5 5.5 0 0 0 0 11h36.111a5.5 5.5 0 0 0 0-11zM232.405 291.19a5.5 5.5 0 0 0 5.5 5.5h36.112a5.5 5.5 0 0 0 0-11h-36.112a5.5 5.5 0 0 0-5.5 5.5zM356.238 342.968h-36.111a5.5 5.5 0 0 0 0 11h36.111a5.5 5.5 0 0 0 0-11zM279.517 348.468a5.5 5.5 0 0 0-5.5-5.5h-36.112a5.5 5.5 0 0 0 0 11h36.112a5.5 5.5 0 0 0 5.5-5.5zM393.31 129.73a5.756 5.756 0 0 0-1.19-1.79 5.771 5.771 0 0 0-1.79-1.19c-.33-.13-.68-.24-1.03-.31-.71-.14-1.44-.14-2.15 0-.35.07-.7.18-1.03.31-.33.14-.65.31-.95.51a5.49 5.49 0 0 0-1.52 1.52 5.858 5.858 0 0 0-.82 1.98c-.07.35-.1.71-.1 1.07 0 1.45.58 2.87 1.61 3.89.25.26.53.49.83.69.3.19.62.36.95.5.33.14.68.25 1.03.32.36.07.72.1 1.08.1 1.44 0 2.86-.58 3.89-1.61a5.546 5.546 0 0 0 1.61-3.89c0-.36-.04-.72-.11-1.07-.07-.35-.18-.7-.31-1.03zM161.32 129.73a5.756 5.756 0 0 0-1.19-1.79 5.78 5.78 0 0 0-1.79-1.19c-.33-.13-.68-.24-1.03-.31-1.79-.36-3.69.23-4.96 1.5-.26.26-.49.54-.69.84-.19.3-.36.62-.5.95-.14.33-.24.68-.31 1.03-.08.35-.11.72-.11 1.07a5.5 5.5 0 0 0 1.61 3.89 5.504 5.504 0 0 0 3.89 1.61c.36 0 .72-.03 1.07-.11.35-.07.7-.17 1.03-.31.33-.14.65-.31.95-.5.3-.2.58-.43.84-.69a5.547 5.547 0 0 0 1.61-3.89c0-.36-.04-.72-.11-1.07s-.17-.7-.31-1.03zM197.114 288.37h-60.289l15.123-15.122a5.5 5.5 0 1 0-7.777-7.778l-20.163 20.162-34.598-34.597a5.5 5.5 0 1 0-7.777 7.778l29.557 29.558H52.505c-14.001 0-25.392 11.39-25.392 25.391v97.646c0 14.002 11.39 25.392 25.392 25.392h144.61c14 0 25.39-11.39 25.39-25.392v-97.646c0-14-11.39-25.391-25.39-25.391zm-36.222 77.064-54.128 31.25a5.497 5.497 0 0 1-5.5 0 5.5 5.5 0 0 1-2.75-4.763V329.42a5.5 5.5 0 0 1 8.25-4.763l54.128 31.251a5.5 5.5 0 0 1 0 9.527zM181.478 202.755h-.389a4.774 4.774 0 0 0-4.768 4.768v47.9a5.832 5.832 0 0 0 5.825 5.825h27.695c2.63 0 4.77-2.14 4.77-4.769 0-2.63-2.14-4.769-4.77-4.769h-22.637a.959.959 0 0 1-.958-.957v-43.23c0-2.629-2.139-4.768-4.768-4.768zM234.55 261.248c2.63 0 4.768-2.14 4.768-4.769v-48.956c0-2.629-2.139-4.768-4.768-4.768h-.389a4.774 4.774 0 0 0-4.768 4.768v48.956c0 2.63 2.139 4.769 4.768 4.769zM274.748 261.248h2.066a4.76 4.76 0 0 0 4.535-3.29l15.96-48.956c.478-1.47.232-3.03-.676-4.28s-2.314-1.967-3.859-1.967h-.646a4.744 4.744 0 0 0-4.56 3.372l-11.787 38.504-11.787-38.503a4.743 4.743 0 0 0-4.56-3.373h-.645a4.72 4.72 0 0 0-3.86 1.968 4.72 4.72 0 0 0-.674 4.279l15.958 48.956a4.76 4.76 0 0 0 4.535 3.29zM320.671 212.292h22.49a4.774 4.774 0 0 0 4.77-4.769c0-2.629-2.14-4.768-4.77-4.768h-28.674a4.851 4.851 0 0 0-4.846 4.846v48.8a4.852 4.852 0 0 0 4.846 4.847h28.675a4.774 4.774 0 0 0 4.768-4.769c0-2.63-2.14-4.768-4.768-4.768h-22.49c-.61 0-1.105-.496-1.105-1.105v-12.538c0-.608.495-1.104 1.104-1.104h18.217a4.774 4.774 0 0 0 4.769-4.769c0-2.629-2.14-4.768-4.769-4.768h-18.217c-.609 0-1.104-.496-1.104-1.105v-12.925c0-.61.495-1.104 1.104-1.104z"
                                            fill="#ff6600" opacity="1" data-original="#000000"></path>
                                    </g>
                                </svg>
                            </h1>
                            <p> <span style="font-size: 25px;">

                                    Events and Broadcasting
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-box-back bg-orange-500 h-full w-full text-centertext-center">
                    <div class="inner color-white">
                        <div class="text-white p-10">
                            Laravel's event handling and broadcasting system empowers developers to build real-time,
                            interactive features in their applications. Events can be triggered and listeners can
                            respond in real-time, enhancing user engagement and interaction. Whether it's live chat,
                            notifications, or any other real-time functionality, Laravel simplifies its implementation,
                            delivering dynamic user experiences.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="flex flex-col md:flex-row items-center justify-center gap-10 w-full container mx-auto py-10">

    <div class="md:w-7/12 flex flex-col gap-2">
        <h3 class="text-start">Advantages of Laravel Web Development</h3>
        <div class="flex flex-col gap-2 text-white/25">
            <p>Laraval web development boasts numerous advantages that set it apart from other PHP frameworks. It
                simplifies web development, ensuring faster and more efficient project execution. Here are eight key
                benefits that make Laravel a preferred choice for developers:</p>
        </div>
        <div id="whyus" class="flex flex-col gap-2">
            <h5 class="bg-transparent whyus cursor-pointer" style="border:none"><span><i
                        class="fa-solid fa-caret-right me-2"></i></span>MVC Architecture for Organized Code</h5>
            <div>
                <p>Laraval web development use of the Model-View-Controller (MVC) architectural pattern encourages
                    structured, organized, and easily maintainable code, enhancing developer productivity.</p>
            </div>
            <h5 class="bg-transparent whyus cursor-pointer" style="border:none"><span><i
                        class="fa-solid fa-caret-right me-2"></i></span> Built-In Authentication and Authorization</h5>
            <div>
                <p>Laravel simplifies user authentication and authorization, providing ready-to-use features for
                    securing your application and controlling access.</p>
            </div>
            <h5 class="bg-transparent whyus cursor-pointer" style="border:none"><span><i
                        class="fa-solid fa-caret-right me-2"></i></span>Modularity with Packaging System</h5>
            <div>
                <p>Laravel’s packaging system, Composer, enables easy integration of pre-built components and libraries,
                    fostering modularity and code sharing.</p>
            </div>
            <h5 class="bg-transparent whyus cursor-pointer" style="border:none"><span><i
                        class="fa-solid fa-caret-right me-2"></i></span>Flexible File System Support</h5>
            <div>
                <p>Laravel supports multiple file systems, facilitating interaction with various storage solutions,
                    including cloud storage providers and local file systems.</p>
            </div>

            <h5 class="bg-transparent whyus cursor-pointer" style="border:none"><span><i
                        class="fa-solid fa-caret-right me-2"></i></span>Artisan Console for Task Automation</h5>
            <div>
                <p>Artisan, Laravel’s command-line tool, automates repetitive tasks, streamlining workflows and boosting
                    developer efficiency.</p>
            </div>
            <h5 class="bg-transparent whyus cursor-pointer" style="border:none"><span><i
                        class="fa-solid fa-caret-right me-2"></i></span>Eloquent ORM for Efficient Database Handling
            </h5>
            <div>
                <p>Laravel’s Eloquent ORM simplifies database operations with an intuitive syntax, ensuring clean and
                    efficient database management.</p>
            </div>
            <h5 class="bg-transparent whyus cursor-pointer" style="border:none"><span><i
                        class="fa-solid fa-caret-right me-2"></i></span>Blade Templating Engine for Dynamic UIs</h5>
            <div>
                <p>The Blade templating engine empowers developers to create dynamic and reusable templates, enhancing
                    the clarity and maintainability of views.</p>
            </div>
            <h5 class="bg-transparent whyus cursor-pointer" style="border:none"><span><i
                        class="fa-solid fa-caret-right me-2"></i></span>Task Scheduling for Automating Routine Jobs</h5>
            <div>
                <p>Laravel’s robust task scheduling system automates the execution of recurring tasks, such as sending
                    emails and processing queues, ensuring seamless application performance</p>
            </div>
        </div>
    </div>
    <div class="md:w-5/12 flex flex-col gap-4">
        <span class="py-2 px-10 text-center bg-[#ff6600] border-2 border-white w-full font-bold rounded">MVC Architecture for Organized Code</span>
        <span class="py-2 px-10 text-center bg-[#ff6600] border-2 border-white w-full font-bold rounded">Built-In Authentication and Authorization</span>
        <span class="py-2 px-10 text-center bg-[#ff6600] border-2 border-white w-full font-bold rounded">Modularity with Packaging System</span>
        <span class="py-2 px-10 text-center bg-[#ff6600] border-2 border-white w-full font-bold rounded">Flexible File System Support</span>
        <span class="py-2 px-10 text-center bg-[#ff6600] border-2 border-white w-full font-bold rounded">Artisan Console for Task Automation</span>
        <span class="py-2 px-10 text-center bg-[#ff6600] border-2 border-white w-full font-bold rounded">Eloquent ORM for Efficient Database Handling</span>
        <span class="py-2 px-10 text-center bg-[#ff6600] border-2 border-white w-full font-bold rounded">Blade Templating Engine for Dynamic UIs</span>
        <span class="py-2 px-10 text-center bg-[#ff6600] border-2 border-white w-full font-bold rounded">Task Scheduling for Automating Routine Jobs</span>
    </div>
</div>

<?php include "testimonials.php"; ?>

<!-- Start CTA -->
<section>
    <div class="container">
        <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1"
            data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cta_bg.jpeg">
            <div class="cs-shape_1"></div>
            <div class="cs-shape_1"></div>
            <div class="cs-shape_1"></div>
            <div class="cs-cta_in">
                <h2 class="cs-cta_title cs-semi_bold cs-m0">Ready to Transform Your Digital Presence? Let's Elevate Your
                    Success Together
                </h2>
                <div class="cs-height_70 cs-height_lg_30"></div>
                <a href="contact.html" class="cs-text_btn wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <span>
                        Call Us Today to Get Started</span>
                    <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M25.5307 6.53033C25.8236 6.23744 25.8236 5.76256 25.5307 5.46967L20.7577 0.696699C20.4648 0.403806 19.99 0.403806 19.6971 0.696699C19.4042 0.989593 19.4042 1.46447 19.6971 1.75736L23.9397 6L19.6971 10.2426C19.4042 10.5355 19.4042 11.0104 19.6971 11.3033C19.99 11.5962 20.4648 11.5962 20.7577 11.3033L25.5307 6.53033ZM0.000366211 6.75H25.0004V5.25H0.000366211V6.75Z"
                            fill="currentColor" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
