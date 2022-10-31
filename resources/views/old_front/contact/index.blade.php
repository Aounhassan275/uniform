@extends('front.layout.index')
@section('title')
<title>CONTACT US | {{App\Models\Information::siteName()}}</title>
@endsection
@section('content')

    <!-- Page Add Section Begin -->
    <section class="page-add">
      <div class="container">
          <div class="row">
              <div class="col-lg-4">
                  <div class="page-breadcrumb">
                      <h2>Contact us<span>.</span></h2>
                      <a href="{{url('/')}}">Home</a>
                      <a class="active" href="{{route('contact_us.index')}}">Contact Us</a>
                  </div>
              </div>
              {{-- <div class="col-lg-8">
                  <img src="img/add.jpg" alt="">
              </div> --}}
          </div>
      </div>
  </section>
  <!-- Page Add Section End -->

  <!-- Contact Section Begin -->
  <div class="contact-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <form action="{{route('admin.message.store')}}"  method="post" class="contact-form">
                      @csrf
                      <div class="row">
                          <div class="col-lg-6">
                              <input type="text" name="name" placeholder="Name" required>
                          </div>
                          <div class="col-lg-6">
                            <input type="email" name="email" placeholder="E-mail" required>
                          </div>
                          <div class="col-lg-12">
                              <input type="text" name="subject" placeholder="Subject" required>
                              <textarea name="message" placeholder="Message" required></textarea>
                          </div>
                          <div class="col-lg-12 text-right">
                              <button type="submit">Send message</button>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="col-lg-3 offset-lg-1">
                  <div class="contact-widget">
                      <div class="cw-item">
                          <h5>Location</h5>
                          <ul>
                              <li>{{App\Models\Information::address()}}</li>
                          </ul>
                      </div>
                      <div class="cw-item">
                          <h5>Phone</h5>
                          <ul>
                            <a href="tel:{{App\Models\Information::phone()}}"><li>{{App\Models\Information::phone()}}</li></a>
                          </ul>
                      </div>
                      <div class="cw-item">
                          <h5>E-mail</h5>
                          <ul>
                            <a href="mailto:{{App\Models\Information::email()}}"><li>{{App\Models\Information::email()}}</li></a>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          {{-- <div class="map">
              <div class="row">
                  <div class="col-lg-12">
                      <iframe
                          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26440.72384129847!2d-118.24906619231132!3d34.06719475913053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c659f50c318d%3A0xe2ffb80a9d3820ae!2sChinatown%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1570213740685!5m2!1sen!2sbd"
                          height="560" style="border:0;" allowfullscreen=""></iframe>
                  </div>
              </div>
          </div> --}}
      </div>
  </div>
  <!-- Contact Section End -->
@endsection