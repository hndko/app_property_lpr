<div class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Contact</h3>
                    <h4>{{ $setting->nama_website }}</h4>
                    <address>{{ $setting->alamat }}</address>
                    <ul class="list-unstyled links">
                        <li><a href="tel://0217980616">{{ $setting->no_telpon }}</a></li>
                        <li>
                            <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="widget">
                    <h3>Sitemap</h3>
                    <ul class="list-unstyled float-start links">
                        <li><a href="{{ route('/') }}">Beranda</a></li>
                        <li><a href="{{ route('properties') }}">Properti</a></li>
                        <li><a href="{{ route('agent-properti') }}">Agen</a></li>
                        <li><a href="{{ route('contact') }}">Kontak Kami</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="widget">
                    <h3>Open Hours</h3>
                    <ul class="list-unstyled float-start links">
                        <li>{{ $setting->day_start }} - {{ $setting->day_end }}</li>
                        <li>{{ $setting->hours_start }} - {{ $setting->hours_end }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Sosial Media</h3>
                    <ul class="list-unstyled social">
                        <li>
                            <a href="https://www.instagram.com/{{ $setting->instagram === null ? '#' : '' }}"><span
                                    class="icon-instagram"></span></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/{{ $setting->twitter === null ? '#' : '' }}"><span
                                    class="icon-twitter"></span></a>
                        </li>
                        <li>
                            <a href="https://facebook.com/{{ $setting->facebook === null ? '#' : '' }}"><span
                                    class="icon-facebook"></span></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/{{ $setting->linkedin === null ? '#' : '' }}"><span
                                    class="icon-linkedin"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <p>
                    Copyright &copy;{{ date('Y') }}. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- WhatsApp floating button -->
<a href="https://api.whatsapp.com/send?phone=62{{ $whatsapp->no_telpon }}&text={{ $whatsapp->text_whatsapp }}"
    class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>
