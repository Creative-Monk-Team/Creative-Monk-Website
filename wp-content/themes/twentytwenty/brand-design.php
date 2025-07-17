<?php
/**
 * Template Name: BDTemplate
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
            <h1 class="cs-page_title cs-font_50 cs-white_color">Brand Design</h1>
        </div>
    </div>
</div>


<div class="container mx-auto flex flex-col items-center py-20">
    <h2 class="text-center ">What is Brand Design?</h2>
    <p class="text-white/25 text-center text-lg">Brand Design is the art of creating a visual identity that represents
        your company’s personality, values, and objectives. It goes beyond just a logo; it encompasses colors,
        typography, shapes, and illustrations. Effective brand design leaves a lasting impression, generates referrals,
        and communicates the essence of your business. It’s an intangible asset that offers a competitive advantage,
        ensuring your brand is recognized and respected.</p>
</div>


<div class="container mx-auto flex flex-col items-center py-20">
    <h5 class="" style="color: #ff6900;">Brand Design</h5>
    <h2 class="text-center my-2">What Elements Does Brand Design Include?</h2>

    <div class="flex flex-col md:flex-row gap-2 items-center justify-center py-2">
        <div
            class="bg-white p-4 flex flex-col gap-2 items-center justify-center rounded-xl w-full md:w-32 h-52 md:h-40">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#ff6900" height="512" viewBox="0 0 60 61" width="512">
                <path
                    d="m58 7h1c.552 0 1-.447 1-1v-4c0-.553-.448-1-1-1h-4c-.552 0-1 .447-1 1v1h-20v-2c0-.553-.448-1-1-1h-6c-.552 0-1 .447-1 1v2h-20v-1c0-.553-.448-1-1-1h-4c-.552 0-1 .447-1 1v4c0 .553.448 1 1 1h1v47h-1c-.552 0-1 .447-1 1v4c0 .553.448 1 1 1h4c.552 0 1-.447 1-1v-1h20v2c0 .553.448 1 1 1h6c.552 0 1-.447 1-1v-2h20v1c0 .553.448 1 1 1h4c.552 0 1-.447 1-1v-4c0-.553-.448-1-1-1h-1v-23.5zm-2-4h2v2h-2zm-28-1h4v2.17 1.83h-4v-1.83-.17zm-26 1h2v2h-2zm2 4h1c.552 0 1-.447 1-1v-1h13.495c-7.097 2.805-12.683 8.358-15.495 15.27zm0 51h-2v-2h2zm1-4h-1v-13.27c2.812 6.912 8.398 12.465 15.495 15.27h-13.495v-1c0-.553-.448-1-1-1zm19.25-30.116 3.541 9.678c-1.269.93-1.842 2.61-1.274 4.159.332.909.999 1.635 1.878 2.043.486.226 1.004.339 1.524.339.421 0 .842-.074 1.248-.223.91-.333 1.635-1 2.043-1.878.408-.879.45-1.863.117-2.772-.566-1.549-2.087-2.463-3.657-2.355l-3.543-9.683 13.769 10.942c-1.626 2.231-2.077 4.905-1.195 7.33l1.159 3.171-12.1 4.426-1.161-3.175c-.896-2.447-3.026-4.184-5.805-4.788zm7.199 12.033c.149.407.13.849-.053 1.242-.183.394-.508.693-.917.843-.407.148-.85.131-1.242-.053-.394-.183-.693-.508-.842-.916-.308-.842.126-1.777.968-2.085.184-.067.372-.1.557-.1.663.001 1.287.411 1.529 1.069zm-3.002 15.024 12.1-4.427 2.253 6.162c-.056.031-.111.064-.167.094-.583.32-1.174.617-1.775.89-.077.035-.154.069-.232.103-.04.017-.08.034-.119.051-.605.264-1.218.507-1.841.724-.006.002-.013.005-.019.007-.096.034-.194.064-.291.097-.608.203-1.223.382-1.846.539-.133.034-.265.067-.398.098-.664.156-1.335.29-2.014.394-.033.005-.066.008-.099.013v-1.686c0-.553-.448-1-1-1h-3.799zm3.553 8.059h-4v-2.17-1.83h.5 3.5v1.83.17zm26-1h-2v-1-1h1 1zm-2-17.227v13.227h-1c-.552 0-1 .447-1 1v1h-13.51c.018-.007.035-.016.053-.024.599-.24 1.188-.508 1.771-.791.153-.074.304-.149.456-.226.599-.304 1.193-.623 1.775-.972.001-.001.002-.002.003-.002.602-.359 1.181-.742 1.748-1.139.181-.126.354-.259.531-.389.388-.285.768-.576 1.138-.878.187-.153.372-.307.555-.464.365-.313.717-.636 1.063-.966.151-.144.306-.285.454-.432.477-.477.94-.965 1.378-1.472.042-.048.079-.1.12-.149.395-.464.773-.94 1.135-1.427.129-.174.25-.352.375-.528.268-.379.527-.763.774-1.155.124-.196.246-.392.364-.59.246-.413.479-.832.702-1.257.09-.17.185-.338.271-.51.297-.596.576-1.201.829-1.818.003-.013.01-.025.015-.038zm-11.458 10.843-3.962-10.838c-.746-2.05-.21-4.281 1.47-6.124.187-.205.28-.478.257-.754-.022-.276-.158-.53-.375-.703l-17.095-13.585c-.161-.606-.485-2.288.473-3.507 1.091-1.387 3.625-1.894 7.325-1.478 3.713.426 6.29-.142 7.667-1.674 1.082-1.202 1.107-2.708.952-3.409l-1.952.434c.002.009.166.913-.486 1.639-.895.993-3.011 1.354-5.955 1.024-4.492-.513-7.559.241-9.123 2.229-1.58 2.009-1.041 4.548-.8 5.389l-4.309 21.465c-.055.276.008.562.174.789.167.227.42.373.7.402 2.564.273 4.466 1.607 5.218 3.661l2.349 6.424h-.07c-.552 0-1 .447-1 1v1.692c-12.619-1.897-22-12.54-22-25.192s9.381-23.295 22-25.192v1.692c0 .553.448 1 1 1h6c.552 0 1-.447 1-1v-1.692c12.619 1.897 22 12.54 22 25.192 0 8.569-4.264 16.37-11.458 21.116zm-4.037-46.616h13.495v1c0 .553.448 1 1 1h1v13.27c-2.812-6.912-8.398-12.465-15.495-15.27z">
                </path>
            </svg>
            <h5 class="text-center" style="color:gray">Logo</h5>
        </div>
        <span class="hidden md:block h-[2px] w-40 bg-white/50"></span>
        <div
            class="bg-white p-4 flex flex-col gap-2 items-center justify-center rounded-xl w-full md:w-32 h-52 md:h-40">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#ff6900" id="Capa_1" height="512" viewBox="0 0 510 510"
                width="512">
                <path
                    d="m108.649 194.85c-30.425 0-55.177 24.752-55.177 55.177s24.752 55.177 55.177 55.177 55.177-24.752 55.177-55.177-24.752-55.177-55.177-55.177zm0 80.356c-13.883 0-25.179-11.295-25.179-25.179s11.296-25.179 25.179-25.179 25.179 11.295 25.179 25.179-11.296 25.179-25.179 25.179z">
                </path>
                <path
                    d="m206.358 325.171c-30.424 0-55.176 24.752-55.176 55.177 0 30.424 24.752 55.176 55.176 55.176 30.425 0 55.177-24.752 55.177-55.176 0-30.425-24.752-55.177-55.177-55.177zm0 80.355c-13.883 0-25.178-11.295-25.178-25.179s11.295-25.179 25.178-25.179c13.884 0 25.179 11.295 25.179 25.179.001 13.884-11.295 25.179-25.179 25.179z">
                </path>
                <path
                    d="m496.18 324.693c-.099-.098-.198-.194-.299-.29l-51.938-49.011c29.074-21.984 42.208-60.897 30.264-96.895-56.309-169.883-272.685-223.779-401.614-96.798-96.561 95.102-95.66 248.445-4.044 342.874 82.305 84.831 211.993 96.745 307.711 34.089 44.824-29.332 24.217-99.152-29.421-99.152-40.06 0-46.792-56.011-8.951-65.602l91.503 96.974c.096.101.192.201.291.3 18.343 18.385 48.139 18.434 66.53.042 18.389-18.388 18.389-48.152-.032-66.531zm-193.801 47.105c12.051 11.42 27.84 17.709 44.461 17.709 23.956 0 32.988 30.972 12.993 44.056-83.775 54.84-197.555 44.538-269.754-29.878-80.978-83.463-80.501-217.407 3.896-300.423 113.093-111.242 302.248-64.702 351.759 84.677 8.389 25.283-2.094 52.756-24.082 66.419l-83.314-78.619c5.044-24.218-1.942-49.749-20.246-68.052-22.973-22.974-95.346-34.425-126.711-37.832-9.513-1.036-17.568 7.006-16.533 16.533 3.435 31.487 14.819 103.696 37.833 126.711 18.316 18.314 43.86 25.286 68.059 20.243l35.094 37.192c-37.37 20.287-44.958 71.41-13.455 101.264zm-68.487-179.911c-11.303-11.303-21.402-54.292-26.734-89.723 35.432 5.331 78.421 15.431 89.723 26.734 17.404 17.404 17.407 45.58 0 62.989-17.365 17.367-45.547 17.442-62.989 0zm241.11 178.126c-6.61 6.61-17.308 6.64-23.957.107-7.678-8.137-134.279-142.308-141.333-149.783 5.918-4.395 11.222-9.699 15.623-15.623l149.784 141.343c6.539 6.656 6.503 17.335-.117 23.956z">
                </path>
            </svg>
            <h5 class="text-center" style="color:gray">Colors</h5>
        </div>
        <span class="hidden md:block h-[2px] w-40 bg-white/50"></span>
        <div
            class="bg-white p-4 flex flex-col gap-2 items-center justify-center rounded-xl w-full md:w-32 h-52 md:h-40">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#ff6900" id="Capa_1" height="512"
                viewBox="0 0 467.765 467.765" width="512">
                <path
                    d="m175.412 87.706h58.471v29.235h58.471v-87.706h-292.354v87.706h58.471v-29.235h58.471v292.353h-58.471v58.471h175.383v-58.471h-58.442z">
                </path>
                <path
                    d="m233.882 175.412v87.706h58.471v-29.235h29.235v146.176h-29.235v58.471h116.941v-58.471h-29.235v-146.177h29.235v29.235h58.471v-87.706h-233.883z">
                </path>
            </svg>
            <h5 class="text-center" style="color:gray">Typography</h5>
        </div>
        <span class="hidden md:block h-[2px] w-40 bg-white/50"></span>
        <div
            class="bg-white p-4 flex flex-col gap-2 items-center justify-center rounded-xl w-full md:w-32 h-52 md:h-40">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#ff6900" xmlns:xlink="http://www.w3.org/1999/xlink"
                id="Capa_1" x="0px" y="0px" viewBox="0 0 511.999 511.999"
                style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                <g>
                    <g>
                        <path
                            d="M498.523,246.291c37.941-67.923-8.514-149.499-85.88-157.204l-28.232-2.813c-20.59-2.053-38.982-10.974-54.263-28.128   c-53.185-59.695-152.219-44.954-184.82,26.764c-7.94,17.466-22.298,31.438-40.428,39.344l-39.773,17.34   c-63.399,27.64-84.894,104.334-44.848,159.183l25.236,34.563c5.481,7.508,9.482,15.807,11.893,24.666l12.532,46.073   c17.167,63.115,88.755,97.22,151.241,70.693l5.35-2.271c15.901-6.751,33.992-8.387,50.932-4.616l82.048,18.269   c79.933,17.798,150.39-51.574,132.54-127.825l-10.384-44.351c-4.203-17.953-1.524-36.78,7.544-53.012L498.523,246.291z">
                        </path>
                    </g>
                </g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
            </svg>
            <h5 class="text-center" style="color:gray">Shapes</h5>
        </div>

        <span class="hidden md:block h-[2px] w-40 bg-white/50"></span>
        <div
            class="bg-white p-4 flex flex-col gap-2 items-center justify-center rounded-xl w-full md:w-32 h-52 md:h-40">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#ff6900" xmlns:xlink="http://www.w3.org/1999/xlink"
                id="Layer_1" x="0px" y="0px" viewBox="0 0 485 485" style="enable-background:new 0 0 485 485;"
                xml:space="preserve">
                <g>
                    <path
                        d="M168.404,305.486h68.192l18.428,61.115h57.887l-73.885-238.312h-70.621L95.455,366.601h55.875L168.404,305.486z   M201.199,168.546h0.693c3.505,14.264,26.966,96.545,26.966,96.545h-52.75C176.108,265.091,197.658,182.81,201.199,168.546z">
                    </path>
                    <rect x="333.95" y="193.775" width="53.824" height="172.826"></rect>
                    <path
                        d="M360.533,172.503c17.769,0,29.012-12.078,29.012-26.86c-0.415-15.583-11.243-27.244-28.595-27.244  c-17.352,0-28.735,11.66-28.353,27.244C332.215,160.425,343.598,172.503,360.533,172.503z">
                    </path>
                    <path d="M0,0v485h485V0H0z M455,455H30V30h425V455z"></path>
                </g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
            </svg>
            <h5 class="text-center" style="color:gray">Illustration</h5>
        </div>
    </div>
</div>

<div class="flex flex-col md:flex-row items-center justify-center gap-10 w-full container mx-auto py-10">

    <div class="md:w-7/12 flex flex-col gap-2">
        <h3 class="text-start">How Do We Execute Brand Design?</h3>
        <div class="flex flex-col gap-2 text-white/25">
            <p>At Creative Monk, our strategic approach to brand design ensures that every element we create resonates
                with your business objectives and values. Our aim is to leave a lasting impression, foster referrals,
                and effectively communicate your business’s DNA to the world.</p>
        </div>
        <div id="whyus" class="flex flex-col gap-2">
            <h5 class="bg-transparent whyus cursor-pointer" style="border:none"><span><i
                        class="fa-solid fa-caret-right me-2"></i></span>Do Your Research</h5>
            <div>
                <p>We begin by thoroughly researching your industry, target audience, and competition to gather insights
                    that inform our design process.</p>
            </div>
            <h5 class="bg-transparent whyus cursor-pointer" style="border:none"><span><i
                        class="fa-solid fa-caret-right me-2"></i></span> Clarify Your Strategy</h5>
            <div>
                <p>We work closely with you to define a clear strategy that outlines your brand’s goals, target
                    audience, and unique value proposition.</p>
            </div>
            <h5 class="bg-transparent whyus cursor-pointer" style="border:none"><span><i
                        class="fa-solid fa-caret-right me-2"></i></span>Design Your Elements</h5>
            <div>
                <p>Our creative team meticulously designs every element, from your logo to color schemes, ensuring they
                    align with your brand’s personality and message.</p>
            </div>
            <h5 class="bg-transparent whyus cursor-pointer" style="border:none"><span><i
                        class="fa-solid fa-caret-right me-2"></i></span>Create Your Touchpoints</h5>
            <div>
                <p>We establish effective customer touchpoints that engage and support your customers throughout their
                    journey, ensuring a seamless and positive brand experience.</p>
            </div>
        </div>
    </div>
    <div class="md:w-5/12"><img class="h-full w-full"
            src="https://binnysfoodart.in/cmnew/wp-content/uploads/2023/09/side-view-businessman-analyzing-chart-1-1-1024x683.jpg"
            alt="">
    </div>
</div>

<div class="w-full container mx-auto py-10 ">
    <h5 class="text-center" style="color: #ff6900;">Brand Design</h5>
    <h2 class="text-center my-2">Importance of Brand Design</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-10">
        <div class="min-h-52 p-4 h-auto bg-white rounded-3xl flex flex-col items-center">
            <h4 class="text-center" style="color: #ff6900;">Competitive Advantage</h4>
            <p class="text-black text-center">An aesthetically designed brand, complemented by attractive strategies, provides a
                competitive edge in a
                challenging market. It sets your business apart and makes it more appealing to your target audience.</p>
        </div>
        <div class="min-h-52 p-4 h-auto bg-white rounded-3xl flex flex-col items-center">
            <h4 class="text-center" style="color: #ff6900;">Lasting Impression</h4>
            <p class="text-black text-center">Well-planned brand design and strategies create a memorable and lasting impression,
                ensuring brand
                recall. Customers remember and recognize your brand, fostering long-term relationships.</p>
        </div>
        <div class="min-h-52 p-4 h-auto bg-white rounded-3xl flex flex-col items-center">
            <h4 class="text-center" style="color: #ff6900;">Generates Referrals</h4>
            <p class="text-black text-center">Satisfied customers become brand ambassadors, leading to quality referrals and more
                potential leads. Your
                brand’s excellence encourages word-of-mouth marketing.</p>
        </div>
        <div class="min-h-52 p-4 h-auto bg-white rounded-3xl flex flex-col items-center">
            <h4 class="text-center" style="color: #ff6900;">Talks about the Business DNA</h4>
            <p class="text-black text-center">Brand design should reflect your company’s goals, ethics, values, and objectives,
                communicating its
                nature and personality to consumers. It showcases the essence of your business, fostering trust and
                credibility.</p>
        </div>
        <div class="min-h-52 p-4 h-auto bg-white rounded-3xl flex flex-col items-center">
            <h4 class="text-center" style="color: #ff6900;">Intangible Asset</h4>
            <p class="text-black text-center">Your brand is a stable and constant intangible asset, offering long-term benefits to
                your business. It’s
                a valuable investment with enduring impact.</p>
        </div>
        <div class="min-h-52 p-4 h-auto bg-white rounded-3xl flex flex-col items-center">
            <h4 class="text-center" style="color: #ff6900;">Brand Recognition</h4>
            <p class="text-black text-center">A well-executed design results in instant recognition, with elements like color
                schemes, fonts, logos,
                and creative expressions becoming synonymous with your brand’s identity. This immediate recognition
                builds trust, credibility, and customer loyalty, ultimately contributing to your business’s growth and
                success.</p>
        </div>
    </div>
</div>

<?php include "testimonials.php" ?>

    <!-- Start CTA -->
    <section>
        <div class="container">
            <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1"
                data-src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cta_bg.jpeg">
                <div class="cs-shape_1"></div>
                <div class="cs-shape_1"></div>
                <div class="cs-shape_1"></div>
                <div class="cs-cta_in">
                    <h2 class="cs-cta_title cs-semi_bold cs-m0">Ready to Transform Your Digital Presence? Let's Elevate Your Success Together
                    </h2>
                    <div class="cs-height_70 cs-height_lg_30"></div>
                    <a href="contact.html" class="cs-text_btn wow fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.2s">
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
