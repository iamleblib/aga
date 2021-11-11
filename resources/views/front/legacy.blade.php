@extends('layouts.front')

@section('content')

<title>Coinbase Assets - Our Legal</title>
    
    
    <div class="landing_wrapper breadcrumb_wrapper">

        <div class="wrapper breadcrumb_wrapper_content" style="background-image: url('https://eskipaper.com/images/3d-wallpaper-20.jpg'); background-size: cover">
            <div class="container h-100">
                <div class="row h-100 align-items-center text-center">
                    <div class="col">
                        <h2 class="breadcrumb_title">Our Legacy</h2>
                    </div>
                </div>
                <div class="bread_crumb">
                    <p><a href="{{ route('front.index')}}">Home</a> <i class="fa fa-angle-right"></i> <span class="text_colored">Team</span></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="wrapper blog_page_wrapper">
        <div class="container">
            <div class="row">
                <div class="single_blog_item align-left">
                    <div class="blog_info">
                        <a class="blog_title text-dark" href="#">Legacy Certificate</a>
                        <div style="margin: 10px; !important"></div>
                        <img class="" src="{{ asset('front/img/Wrapper_title_divider.png')}}" aria-colcount="" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div id="faq_wrapper" class="wrapper faq_wrapper" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="">
                            <img src="{{ asset('front/img/legacy_image.png')}}" class="ceo" width="350px" alt="">
                        </div>
                    </div>
                        <div class="col-md-7">
                            <br>
                            <br>
                            <p class="text-left">   
                            <i>Today, as a successful trade investment and asset management company from United Kingdom with years of impeccable track record, we are trusted by thousands of clients in countries worldwide.

                            We provide complete and accurate transparency on how generate profits with a high definition source and quality security to ensure encryption sockets, while assuring a fully transparent deposit with a very swift and easy withdrawal pay-out policy. Which will help our investors to create a solid financial foundation.</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    


        <div class="container">
            <div class="row">
                <div class="single_blog_item align-left">
                    <div class="blog_info">
                        <a class="blog_title text-dark" href="#">Certificate</a>
                        <div style="margin: 10px; !important"></div>
                        <img class="" src="{{ asset('front/img/Wrapper_title_divider.png')}}" aria-colcount="" alt="">
                    </div>
                </div>
            </div>
        </div>

<small>Click to View</small>
<br>
<br>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<div class="container">
	<div class="row">
		<div class="row">
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Department of Financial Service"
                   data-image="{{ asset('front/img/certificate/ac.jpeg') }}"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{{ asset('front/img/certificate/ac.jpeg') }}"
                         alt="Authorization Certificate">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Authorization Certificate "
                   data-image="{{ asset('front/img/certificate/acra.png') }}"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{{ asset('front/img/certificate/acra.png') }}"
                         alt="Certificate of Confirming Incorporation of Company">
                </a>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Cryptocurrency Certificate Consortium"
                   data-image="{{ asset('front/img/certificate/ccc.jpeg') }}"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{{ asset('front/img/certificate/ccc.jpeg') }}"
                         alt="Cryptocurrency Certificate Consortium">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Certificate of Confirming Incorporation of Company"
                   data-image="{{ asset('front/img/certificate/ci.jpeg') }}"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{{ asset('front/img/certificate/ci.jpeg') }}"
                         alt="Certificate of Incorporation">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Certificate of Incorporation of a Private Ltd Company"
                   data-image="{{ asset('front/img/certificate/ciplc.jpeg') }}"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{{ asset('front/img/certificate/ciplc.jpeg') }}"
                         alt="Certificate of Incorporation of a Private Ltd Company.">
                </a>
            </div>


            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Certificate of Incorporation"
                   data-image="{{ asset('front/img/certificate/dfs.jpeg') }}"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{{ asset('front/img/certificate/dfs.jpeg') }}"
                         alt="Department of Financial Service">
                </a>
            </div>
        </div>


        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-success float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<br>
<br>
<br>    

<script>
let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

</script>

@endsection