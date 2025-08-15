<main class="main-box bg-white">
    <div class="wrapper">
        <div class="flex flex-col lg:flex-row lg:gap-5 gap-10">
          <div class="lg:max-w-[464px] w-full text-center lg:text-left">
              <div class="flex items-center justify-center lg:justify-start">
                <?php echo file_get_contents(get_template_directory() . '/assets/images/contact-us/banner-icon1.svg'); ?>
              </div>
              <h2 class="mt-6 lg:mb-8 mb-5 text-primary xl:text-h1 lg:text-h2 md:text-h4 text-h5">Get in touch with us</h2>
              <address class="not-italic">398 11th St, San Francisco</address>
          </div>

          <div class="w-full text-center lg:text-left">
              <p>We will get back to you as soon as possible.</p>

              <form class="mt-10 w-full" method="POST" id="contact-us-form">
                <div class="w-full flex gap-6 items-center">
                  <label class="w-full">
                    <input class="w-full px-8 py-5 rounded-sm border-2 border-[#9FA0B866] text-primary" type="text" name="first_name" autocomplete="given-name" placeholder="First name"/>
                  </label>

                  <label class="w-full">
                    <input class="w-full px-8 py-5 rounded-sm border-2 border-[#9FA0B866] text-primary" type="text" name="last_name" autocomplete="family-name" placeholder="Last name"/>
                  </label>
                </div>

                <label class="mt-6 w-full block">
                  <input class="w-full px-8 py-5 rounded-sm border-2 border-[#9FA0B866] text-primary" type="email" name="email" autocomplete="email" placeholder="Email"/>
                </label>

                <label class="mt-6 w-full block">
                  <input class="w-full px-8 py-5 rounded-sm border-2 border-[#9FA0B866] text-primary" type="text" name="subject" autocomplete="none" placeholder="Subject"/>
                </label>

                <label class="mt-6 w-full block">
                  <textarea class="w-full px-8 py-5 rounded-sm border-2 border-[#9FA0B866] text-primary" rows="4" name="message" autocomplete="none" placeholder="Message"></textarea>
                </label>

                <button type="submit" class="mt-6 button-red cursor-pointer w-full block">Submit</button>
              </form>
          </div>
        </div>
    </div>
</main>