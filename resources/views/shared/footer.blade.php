<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-md-3 col-lg-3">
        <div class="dividerWidget">
          <h4>About Us</h4>
          <div class="gDot widget"></div>
        </div>
        <div class="widfoot_content">
          <p>Scepter Concept Engineering Nigeria Limited specializes in
            power products and research marketing in Nigeria. Products
            include off-grid inverters, solar panels. We have competent
            Engineers and Technicians who perform electrical wiring and
            installation.
          </p>
        </div>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3">
        <div class="dividerWidget">
          <h4>Recent Posts</h4>
          <div class="gDot widget"></div>
        </div>
        @if ($recent_posts)
          @if (count($recent_posts) > 0)
            <div class="widfoot_content">
              <ul class="links">
                @foreach ($recent_posts as $post)
                  <li><i class="fa fa-caret-right"></i> <a href="/post/view?id={{$post->id}}"><?php echo $cont = substr(strip_tags($post->post_title),0,30); if (strlen($cont) < strlen($post->post_title)) echo "..." ?><span>{{ date ('F j, Y', strtotime($post->created_at))}}</span></a></li>
                @endforeach
              </ul>
            </div>
          @endif
        @endif
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3">
        <div class="dividerWidget">
          <h4>Locate Us</h4>
          <div class="gDot widget"></div>
        </div><br>
        <ul class="contact-details-alt">
          <li><i class="fa fa-map-marker"></i>
            <p>102, CUDA Shopping Complex, Alagbaka GRA, Akure NG.</p>
          </li>
          <li><i class="fa fa-map-marker"></i>
            <p>1, Ekololu Street, Off Lawanson Road, Surulere, Lagos NG.</p>
          </li>
          <li><i class="fa fa-user"></i> <p><a href="tel:+2347065691427">(+234) 706 569 1427</a></p></li>
          <li><i class="fa fa-envelope"></i> <p><a href="mailto:scepterconceptnig@yahoo.com">scepterconceptnig@yahoo.com</a></p></li>
        </ul>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3">
        <div class="dividerWidget">
          <h4></h4>
          <br>
          <iframe
            width="200"
            height="200"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCK4A2GUKhzcS7y43Fhonr8PVob1I3cd_4&q=Alagbaka+Akure" allowfullscreen>
          </iframe>
        </div>
        <div class="widfoot_content">
          <div class="flickr">
            <ul id="basicuse" class="flickr-feed"></ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<section class="footer_bottom">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <p class="copyright">&copy 2016 - <?php echo date("Y"); ?>. Scepter Concepts Nigeria Limited</p>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="footer_social">
          <ul class="footbot_social">
            <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a class="skype" href="#." data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>