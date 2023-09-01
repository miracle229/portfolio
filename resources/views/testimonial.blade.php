@extends('layouts.app')

@section('content')
<section id="testimonial" class="customer-serv">
    <div class="container">
        <div class="row session-title">
            <h2>Happy Customers</h2>
           
        </div>

        <div class="row ro-clo">
            @foreach ($ad_testimonials as $item)
                <div data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: scrollReveal" class="col-12  col-md-6 col-lg-4">
                    {{-- <a href="{{ route('ad') }}"></a> --}}
                    <div class="shado-2 card-b">
                        <p>{{ $item->commentaires }}</p>
                    </div>
                    <div class="cust-det row">
                        <div class="col-sm-3 col-3 img-circl">
                            <img alt="" src="{{ Storage::url($item->image) }}">
                        </div>
                        <div class="col-sm-5 col-5 an-mtc no-padding">
                            <b>{{ $item->auteur }}</b>
                            <p>( {{ $item->poste }} )</p>
                        </div>
                        <div class="col-sm-4 col-4 star-par">
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            
            {{-- <div class="col-12  col-md-6 col-lg-4">
                <div class="shado-2 card-b">
                    <p> have use this product at my home last 1 and half year of this. This product quality is good.Its good quality product for use it can improve water Quality.
                    </p>
                </div>
                <div class="cust-det row">
                    <div class="col-sm-3 col-3 img-circl">
                        <img alt="" src="{{ url('assets/images/testimonial/member-02.jpg') }}">
                    </div>
                    <div class="col-sm-5 col-5 an-mtc no-padding">
                        <b>Binny Aderson</b>
                        <p>(Sales Agent)</p>
                    </div>
                    <div class="col-sm-4  col-4 star-par">
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div data-anijs="if: scroll, on: window, do: bounceInRight animated, before: scrollReveal" class="col-12  col-md-6 col-lg-4">
                <div class="shado-2 card-b">
                    <p>Very essensial product.it is clean and helthy water is mutually most important so that acqa is fufil its quality.our life now a days very tressful and restless</p>
                </div>
                <div class="cust-det row">
                    <div class="col-sm-3 col-3 img-circl">
                        <img alt="" src="{{ url('assets/images/testimonial/member-03.jpg') }}">
                    </div>
                    <div class="col-sm-5 col-5 an-mtc no-padding">
                        <b>Arjun Samluel</b>
                        <p>(Sales Agent)</p>
                    </div>
                    <div class="col-sm-4 col-4 star-par">
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>

    </div>

</section>   
      

      
<!--*************** Pricing Starts Here ***************-->
<div id="generic_price_table">
<section class="container-fluid price-tab">
   <div class="container">
        <div class="row session-title">
           <h2>Our Attractive Pricing</h2>
           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
       </div>
   </div>
   <div class="container">

       <!--BLOCK ROW START-->
       <div class="row price-row">
           <div class="col-md-4">

               <!--PRICE CONTENT START-->
               <div class="generic_content clearfix nnj">

                   <!--HEAD PRICE DETAIL START-->
                   <div class="generic_head_price clearfix">

                       <!--HEAD CONTENT START-->
                       <div class="generic_head_content clearfix">

                           <!--HEAD START-->
                           <div class="head_bg"></div>
                           <div class="head">
                               <span>Basic</span>
                           </div>
                           <!--//HEAD END-->

                       </div>
                       <!--//HEAD CONTENT END-->

                       <!--PRICE START-->
                       <div class="generic_price_tag clearfix">
                           <span class="price">
                               <span class="sign">$</span>
                               <span class="currency">99</span>
                               <span class="cent">.99</span>
                               <span class="month">/MON</span>
                           </span>
                       </div>
                       <!--//PRICE END-->

                   </div>
                   <!--//HEAD PRICE DETAIL END-->

                   <!--FEATURE LIST START-->
                   <div class="generic_feature_list">
                       <ul>
                           <li><span>2GB</span> Bandwidth</li>
                           <li><span>150GB</span> Storage</li>
                           <li><span>12</span> Accounts</li>
                           <li><span>7</span> Host Domain</li>
                           <li><span>24/7</span> Support</li>
                       </ul>
                   </div>
                   <!--//FEATURE LIST END-->

                   <!--BUTTON START-->
                   <div class="generic_price_btn clearfix">
                       <a class="" href="">Sign up</a>
                   </div>
                   <!--//BUTTON END-->

               </div>
               <!--//PRICE CONTENT END-->

           </div>

           <div class="col-md-4">

               <!--PRICE CONTENT START-->
               <div class="generic_content active clearfix nnj">

                   <!--HEAD PRICE DETAIL START-->
                   <div class="generic_head_price clearfix">

                       <!--HEAD CONTENT START-->
                       <div class="generic_head_content clearfix">

                           <!--HEAD START-->
                           <div class="head_bg"></div>
                           <div class="head">
                               <span>Standard</span>
                           </div>
                           <!--//HEAD END-->

                       </div>
                       <!--//HEAD CONTENT END-->

                       <!--PRICE START-->
                       <div class="generic_price_tag clearfix">
                           <span class="price">
                               <span class="sign">$</span>
                               <span class="currency">199</span>
                               <span class="cent">.99</span>
                               <span class="month">/MON</span>
                           </span>
                       </div>
                       <!--//PRICE END-->

                   </div>
                   <!--//HEAD PRICE DETAIL END-->

                   <!--FEATURE LIST START-->
                   <div class="generic_feature_list">
                       <ul>
                           <li><span>2GB</span> Bandwidth</li>
                           <li><span>150GB</span> Storage</li>
                           <li><span>12</span> Accounts</li>
                           <li><span>7</span> Host Domain</li>
                           <li><span>24/7</span> Support</li>
                       </ul>
                   </div>
                   <!--//FEATURE LIST END-->

                   <!--BUTTON START-->
                   <div class="generic_price_btn clearfix">
                       <a class="" href="">Sign up</a>
                   </div>
                   <!--//BUTTON END-->

               </div>
               <!--//PRICE CONTENT END-->

           </div>
           <div class="col-md-4">

               <!--PRICE CONTENT START-->
               <div class="generic_content clearfix nnj">

                   <!--HEAD PRICE DETAIL START-->
                   <div class="generic_head_price clearfix">

                       <!--HEAD CONTENT START-->
                       <div class="generic_head_content clearfix">

                           <!--HEAD START-->
                           <div class="head_bg"></div>
                           <div class="head">
                               <span>Unlimited</span>
                           </div>
                           <!--//HEAD END-->

                       </div>
                       <!--//HEAD CONTENT END-->

                       <!--PRICE START-->
                       <div class="generic_price_tag clearfix">
                           <span class="price">
                               <span class="sign">$</span>
                               <span class="currency">299</span>
                               <span class="cent">.99</span>
                               <span class="month">/MON</span>
                           </span>
                       </div>
                       <!--//PRICE END-->

                   </div>
                   <!--//HEAD PRICE DETAIL END-->

                   <!--FEATURE LIST START-->
                   <div class="generic_feature_list">
                       <ul>
                           <li><span>2GB</span> Bandwidth</li>
                           <li><span>150GB</span> Storage</li>
                           <li><span>12</span> Accounts</li>
                           <li><span>7</span> Host Domain</li>
                           <li><span>24/7</span> Support</li>
                       </ul>
                   </div>
                   <!--//FEATURE LIST END-->

                   <!--BUTTON START-->
                   <div class="generic_price_btn clearfix">
                       <a class="" href="">Sign up</a>
                   </div>
                   <!--//BUTTON END-->

               </div>
               <!--//PRICE CONTENT END-->

           </div>
       </div>
       <!--//BLOCK ROW END-->

   </div>
</section>

</div>
@endsection