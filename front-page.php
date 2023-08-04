<?php 
  get_header();
?>

    <div class="relative isolate px-6 pt-14 lg:px-8 w-full justify-between">
      <div class="flex lg:flex-row-reverse flex-col py-8 sm:py-8 lg:py-8 w-full justify-between">
        <div class="lg:w-3/6 w-full">
          <img class="w-full" src="<?php echo get_template_directory_uri()?>/assets/media/image.png" alt="" />
        </div>
        <div class="lg:w-3/6 w-full flex flex-col justify-center items-start">
          <span class="text-emerald-700 font-semibold my-4"> About Us </span>
          
          <?php 
            if(have_posts()){
              while(have_posts()){
                the_post();
                the_title('<h1 class="text-6xl font-bold my-4 font-[`Zilla_Slab`]">', '</h1>');
                the_content();
              }
            }
          ?>

          <button class="bg-emerald-700 text-white p-2 rounded my-4">
            Shcedule a Free Call
          </button>
        </div>
      </div>
    </div>

<?php 
  get_footer();
?>