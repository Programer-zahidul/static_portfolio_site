@extends('pages.layout.main')

@section('mainSection')
  <!-- # site main content
                                      ================================================== -->
  {{-- <section id="content" class="s-content"> --}}

  <section class="s-pageheader pageheader">
    <div class="row">
      <div class="column xl-12">
        <h1 class="page-title">
          <span class="page-title__small-type text-pretitle">Projects</span>
          High-Impact Projects
        </h1>

      </div>
    </div>
  </section> <!-- pageheader -->

  <section class="s-pagecontent pagecontent">
    <div class="row pageintro">
      <table>
        <thead>
          <th>No.</th>
          <th>Name</th>
          <th>Description</th>
          <th>Action</th>
        </thead>
        <tbody>
          @foreach ($projects as $project)
            <tr>
              <td style="max-width: 7px">{{ $loop->index + 1 }}.</td>
              <td>{{ $project['name'] }}</td>
              <td>{{ $project['description'] }}</td>
              <td>
                <button>
                  <a href="{{ route('project-view', [$project['slug']]) }}">View</a>
                </button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
@endsection




{{-- <section class="s-pagecontent pagecontent">

    <div class="row pageintro">
      <div class="column xl-6 lg-12">
        <h2 class="text-display-title">High-impact services to help your business</h2>
      </div>
      <div class="column xl-6 lg-12 u-flexitem-x-right">
        <p class="lead">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias eos quas blanditiis, quos sint nostrum fugit
          aperiam
          inventore optio itaque molestias corporis, ipsa tenetur eligendi nihil iste porro, natus culpa consequuntur?
          Maxime,
          corporis tempore. Sed tenetur veritatis velit recusandae eum, molestiae voluptate ducimus laudantium esse illo
          doloribus atque eligendi deleniti iusto.
        </p>
      </div>
    </div> <!-- pageintro -->

    <div class="row">
      <div class="column xl-12 grid-block">

        <div class="grid-full grid-list-items list-items show-ctr">

          <div class="grid-list-items__item list-items__item">
            <div class="list-items__item-header">
              <h3 class="list-items__item-title">Digital Marketing</h3>
            </div>
            <div class="list-items__item-text">
              <p>
                Rerum quam quos. Aut asperiores
                sit mollitia. Rem neque et voluptatem eos quia sed eligendi et. Eaque velit eligendi ut
                magnam. Cumque ducimus laborum doloribus facere maxime vel earum quidem enim suscipit.
              </p>

              <ul class="list-services">
                <li>Cumque Ducimus</li>
                <li>Maxime Vel</li>
                <li>Eligendi Et</li>
              </ul>
            </div>
          </div> <!-- end list-items__item -->
          <div class="grid-list-items__item list-items__item">
            <div class="list-items__item-header">
              <h3 class="list-items__item-title">Social Media Marketing</h3>
            </div>
            <div class="list-items__item-text">
              <p>
                Quibusdam quis autem voluptatibus earum vel ex error ea magni. Rerum quam quos. Aut asperiores
                sit mollitia. Rem neque et voluptatem eos quia sed eligendi et. Eaque velit eligendi ut
                magnam.
              </p>

              <ul class="list-services">
                <li>Lorem Ipsum</li>
                <li>voluptatibus Earum</li>
                <li>Cumque Ducimus</li>
              </ul>
            </div>
          </div> <!-- end list-items__item -->
          <div class="grid-list-items__item list-items__item">
            <div class="list-items__item-header">
              <h3 class="list-items__item-title">Content Marketing</h3>
            </div>
            <div class="list-items__item-text">
              <p>
                Rerum quam quos. Quibusdam quis autem voluptatibus earum vel ex error ea magni. Aut asperiores
                sit mollitia. Rem neque et voluptatem eos quia sed eligendi et. Eaque velit eligendi ut
                magnam.
              </p>

              <ul class="list-services">
                <li>Eaque velit</li>
                <li>Asperiores</li>
                <li>Cumque Ducimus</li>
              </ul>
            </div>
          </div> <!-- end list-items__item -->
          <div class="grid-list-items__item list-items__item">
            <div class="list-items__item-header">
              <h3 class="list-items__item-title">Paid Advertising</h3>
            </div>
            <div class="list-items__item-text">
              <p>
                Eaque velit eligendi ut magnam.Rerum quam quos. Aut asperiores
                sit mollitia. Rem neque et voluptatem eos quia sed eligendi et.
                Cumque ducimus laborum doloribus facere maxime vel earum quidem enim suscipit.
              </p>

              <ul class="list-services">
                <li>Cumque Ducimus</li>
                <li>Maxime Vel</li>
                <li>Eligendi Et</li>
              </ul>
            </div>
          </div> <!-- end list-items__item -->
          <div class="grid-list-items__item list-items__item">
            <div class="list-items__item-header">
              <h3 class="list-items__item-title">Search Engine Optimization</h3>
            </div>
            <div class="list-items__item-text">
              <p>
                Aut asperiores sit mollitia. Rem neque et voluptatem eos quia sed eligendi et. Eaque velit eligendi ut
                magnam. Cumque ducimus laborum doloribus facere maxime vel earum quidem enim suscipit.
              </p>

              <ul class="list-services">
                <li>Cumque Ducimus</li>
                <li>Maxime Vel</li>
                <li>Eligendi Et</li>
              </ul>
            </div>
          </div> <!-- end list-items__item -->
          <div class="grid-list-items__item list-items__item">
            <div class="list-items__item-header">
              <h3 class="list-items__item-title">Advance Analytics</h3>
            </div>
            <div class="list-items__item-text">
              <p>
                Quibusdam quis autem voluptatibus earum vel ex error ea magni. Rerum quam quos. Aut asperiores
                sit mollitia. Rem neque et voluptatem eos quia sed eligendi et. Eaque velit eligendi ut
                magnam.
              </p>

              <ul class="list-services">
                <li>Lorem Ipsum</li>
                <li>Voluptatibus Earum</li>
                <li>Cumque Ducimus</li>
              </ul>
            </div>
          </div> <!-- end list-items__item -->
          <div class="grid-list-items__item list-items__item">
            <div class="list-items__item-header">
              <h3 class="list-items__item-title">Email Marketing</h3>
            </div>
            <div class="list-items__item-text">
              <p>
                Rerum quam quos. Aut asperiores
                sit mollitia. Rem neque et voluptatem eos quia sed eligendi et. Eaque velit eligendi ut
                magnam. Cumque ducimus laborum doloribus facere maxime vel earum quidem enim suscipit.
              </p>

              <ul class="list-services">
                <li>Doloribus</li>
                <li>Mollitia</li>
                <li>Eligendi Et</li>
              </ul>
            </div>
          </div> <!-- end list-items__item -->
          <div class="grid-list-items__item list-items__item">
            <div class="list-items__item-header">
              <h3 class="list-items__item-title">Conversion Rate Optimization</h3>
            </div>
            <div class="list-items__item-text">
              <p>
                Quibusdam quis autem voluptatibus earum vel ex error ea magni. Rerum quam quos. Aut asperiores
                sit mollitia. Rem neque et voluptatem eos quia sed eligendi et. Eaque velit eligendi ut
                magnam.
              </p>

              <ul class="list-services">
                <li>Cumque Ducimus</li>
                <li>Maxime Vel</li>
                <li>Eligendi Et</li>
              </ul>
            </div>
          </div> <!-- end list-items__item -->
          <div class="grid-list-items__item list-items__item">
            <div class="list-items__item-header">
              <h3 class="list-items__item-title">Web Design</h3>
            </div>
            <div class="list-items__item-text">
              <p>
                Aut asperiores sit mollitia. Rem neque et voluptatem eos quia sed eligendi et. Eaque velit eligendi ut
                magnam. Cumque ducimus laborum doloribus facere maxime vel earum quidem enim suscipit.
              </p>

              <ul class="list-services">
                <li>Suscipit</li>
                <li>Voluptatem</li>
                <li>Eligendi Et</li>
              </ul>
            </div>
          </div> <!-- end list-items__item -->

        </div> <!-- grid-list-items -->


      </div> <!-- end grid-block-->
    </div> <!-- end row -->

  </section> <!-- pagecontent -->

  <section class="s-testimonials">

    <div class="s-testimonials__header row row-x-center text-center">
      <div class="column xl-8 lg-12">

        <p class="text-pretitle">
          Testimonials
        </p>
        <h3>
          Reviews From Real Clients
        </h3>

      </div>
    </div> <!--end s-testimonials__header -->

    <div class="row s-testimonials__content">
      <div class="column xl-12 testimonials">

        <div class="swiper-container testimonials__slider page-slider">

          <div class="swiper-wrapper">
            <div class="testimonials__slide swiper-slide">
              <p>
                Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem.
                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil
                nostrum.
                Laudantium quia consequatur molestias.
              </p>
              <div class="testimonials__author">
                <img src="images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                <cite class="testimonials__cite">
                  <strong>John Rockefeller</strong>
                  <span>Standard Oil Co.</span>
                </cite>
              </div>
            </div>
            <div class="testimonials__slide swiper-slide">
              <p>
                Voluptas tempore rem. Molestiae incidunt consequatur quis ipsa autem nam sit enim magni.
                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil
                nostrum.
                Laudantium quia consequatur molestias.
              </p>
              <div class="testimonials__author">
                <img src="images/avatars/user-04.jpg" alt="Author image" class="testimonials__avatar">
                <cite class="testimonials__cite">
                  <strong>Andrew Carnegie</strong>
                  <span>Carnegie Steel Co.</span>
                </cite>
              </div>
            </div>
            <div class="testimonials__slide swiper-slide">
              <p>
                Nisi dolores quaerat fuga rem nihil nostrum. Molestiae incidunt consequatur quis ipsa autem nam sit enim
                magni.
                Voluptas tempore rem. Explicabo a quaerat sint autem dolore ducimus ut consequatur neque.
                Laudantium quia consequatur molestias.
              </p>
              <div class="testimonials__author">
                <img src="images/avatars/user-06.jpg" alt="Author image" class="testimonials__avatar">
                <cite class="testimonials__cite">
                  <strong>Henry Ford</strong>
                  <span>Ford Motor Co.</span>
                </cite>
              </div>
            </div>
            <div class="testimonials__slide swiper-slide">
              <p>
                Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem.
                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil
                nostrum.
                Laudantium quia consequatur molestias.
              </p>
              <div class="testimonials__author">
                <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                <cite class="testimonials__cite">
                  <strong>John Morgan</strong>
                  <span>JP Morgan & Co.</span>
                </cite>
              </div>
            </div>
          </div> <!-- end swiper-wrapper -->

          <div class="swiper-pagination"></div>

        </div> <!--end testimonials__slider -->

      </div> <!-- testimonials -->
    </div> <!--end s-testimonials__content -->

  </section> <!-- end s-testimonials -->

  </section> <!-- s-content-->

  <!-- # cta
              ================================================== -->
  <section id="cta" class="s-cta">

    <div class="row row-x-center text-center">
      <div class="column xl-8 lg-12">

        <div class="s-cta__content">
          <h2 class="text-display-title">
            Get started with a consultation today.
          </h2>
          <p class="lead">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis rem, esse doloribus sint eaque at debitis enim
            vitae minus expedita ratione dignissimos sit nostrum optio sequi. Ipsa at beatae quam.
          </p>
          <a href="contact.html" class="btn btn--primary">Let's Work Together</a>
        </div>

      </div>
    </div>

    </section> <!-- end s-cta -->
   --}}
