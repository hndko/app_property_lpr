<div class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Contact</h3>
                    <h4>Ladang Padi Resor</h4>
                    <address>Jl.Pengadegan Timur I No.30, Kelurahan Pengadegan, Kecamatan Pancoran, Jakarta Selatan
                        12770</address>
                    <ul class="list-unstyled links">
                        <li><a href="tel://0217980616">0217980616</a></li>
                        <li>
                            <a href="mailto:aptpancoranriverside@gmail.com">aptpancoranriverside@gmail.com</a>
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
                        <li><a href="{{ route('agent') }}">Agen</a></li>
                        <li><a href="{{ route('contact') }}">Kontak Kami</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="widget">
                    <h3>Open Hours</h3>
                    <ul class="list-unstyled float-start links">
                        <li>Senin - Minggu</li>
                        <li>08.00 - 16.00</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Sosial Media</h3>
                    <ul class="list-unstyled social">
                        <li>
                            <a href="#"><span class="icon-instagram"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
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
<a href="https://api.whatsapp.com/send?phone=628123456789&text=Halo%2C%20saya%20memiliki beberapa pertanyaan?"
    class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>
