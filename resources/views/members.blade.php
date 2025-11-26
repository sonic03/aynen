@extends('base')
@section('title')
Ekibimiz | Aynen Ajans – Uzman Reklam, Tasarım, Produksiyon ve Dijital Pazarlama Ekibi
@endsection
@section('description')
Aynen Ajans’ın SEO, Google Ads, sosyal medya ve tasarım uzmanlarından oluşan profesyonel ekibiyle tanışın. Markanıza değer katan kreatif kadromuz burada.
@endsection
@section('body')
    <div id="ct-pagetitle" class="ct-pagetitle ">
        <div class="ct-pagetitle-highlight">Aynen Ajans</div>
        <div class="ct-pagetitle-image bg-image" style="left: 504px;"></div>
        <div class="container" style="opacity: 0.579545;">
            <div class="ct-page-title-holder">
                <h1 class="ct-page-title">Ekibimiz</h1>
            </div>
            <ul class="ct-breadcrumb">
                <li><a class="breadcrumb-entry" href="{{ route('index') }}">Ana Sayfa</a></li>
                <li><span class="breadcrumb-entry">Ekibimiz</span></li>
            </ul>
        </div>
    </div>
    <!-- slider end -->
    <div id="content" class="site-content">
        <div class="content-inner">
            <div class="container content-container">
                <div class="row content-row">
                    <div id="primary" class="content-area content-full-width col-12">
                        <main id="main" class="site-main">
                            <article id="post-1788" class="post-1788 page type-page status-publish hentry">
                                <div class="entry-content clearfix">
                                    <div data-elementor-type="wp-page" data-elementor-id="1788" class="elementor elementor-1788">
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-4fd5f0e0 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="4fd5f0e0" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1828px; left: -329px;">
                                            <div class="elementor-container elementor-column-gap-extended ">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6878f798 ct-column-none" data-id="6878f798" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-1c627955 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="1c627955" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-extended ">
                                                                <div class="elementor-column elementor-inner-column elementor-element elementor-element-6eeeb694 ct-column-none" data-id="6eeeb694" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-6d393d25 elementor-widget elementor-widget-ct_heading" data-id="6d393d25" data-element_type="widget" data-widget_type="ct_heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div id="ct_heading-6d393d25" class="ct-heading h-align- item-st-hexagon highlight-style1">
                                                                                    <div class="ct-heading-hexagon-line">
                                                                                        <div class="ct-heading-hexagon">

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ct-heading-text-below"> EKİBİMİZ</div>
                                                                                    <h3 class="item--title case-animate-time st-hexagon " data-wow-delay="ms"> 
                                                                                        <span>YARATICILIK VE ENERJİYİ BİRLEŞTİREN EKİBİMİZ</span>
                                                                                    </h3>
                                                                                    <p>Her projeye tutkuyla yaklaşarak fark yaratıyoruz.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3e1b672e ct-column-none" data-id="3e1b672e" data-element_type="column">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-3b356ded elementor-widget elementor-widget-ct_text_editor" data-id="3b356ded" data-element_type="widget" data-widget_type="ct_text_editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div id="ct_text_editor-3b356ded" class="ct-text-editor " data-wow-delay="ms">
                                                                                    <div class="ct-text-editor elementor-clearfix"> We love what we do and we do it with passion. We value the experimentation of the message and smart incentives.</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </section>
                                                        <!-- members alanı -->
                                                        <div class="elementor-element elementor-element-a68822b elementor-widget elementor-widget-ct_team_grid" data-id="a68822b" data-element_type="widget" data-widget_type="ct_team_grid.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="ct-grid ct-team ct-team-grid1">
                                                                    <div class="ct-grid-inner ct-grid-masonry row animate-time" data-gutter="7">
                                                                    <!-- member cards     -->
                                                                     @foreach($members as $member)
                                                                     @if (str_contains($member->Title, 'Founder'))
                                                                        <div class="grid-item col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                                    @else
                                                                        <div class="grid-item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                                                    @endif
                                                                            <div class="item--inner wow fadeInUp" style="width: 65%;margin: 0 17% 8% 17%;" data-wow-duration="1.2s" style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInUp; animation-delay: 100ms;">
                                                                                <div class="item--image"> 
                                                                                    <a href="">
                                                                                        <img loading="lazy" decoding="async" class="no-lazyload " src="{{ asset('storage/' . $member->photo) }}" width="270" height="330" alt="team1" title="team1">
                                                                                    </a>
                                                                                    <div class="item--social" style="width:100%"> 
                                                                                        <h4 class="item--title" style="text-align:center;color:black;">
                                                                                        {{ $member->Name }}
                                                                                        </h4>
                                                                                    <div class="item--position" style="text-align:center;color:black;">{{ $member->Title }}</div>
                                            
                                                                                    </div>
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    
                                                                                    <a class="item--details" href="https://instagram.com/{{$member->instagram}}"><i class="fab fa-instagram"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- membercard bitiş -->

                                                                    @endforeach
                                                                    </div>
                                                                    <!-- end card -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        

                                                    
                                                                                </div>

                                                                                
                                                </div>
                                            </div>               
                                        </section>
                                    </div>
                                </div>
                                <!-- .entry-content -->
                                </article>
                                <!-- #post-1788 -->
                                </main><!-- #main -->
                            </div><!-- #primary -->
                        </div>
                    </div>
                </div>
                <!-- #content inner --></div>
@endsection