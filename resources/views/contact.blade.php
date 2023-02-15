@extends('layouts.frontp')
@section('content')
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        
                    </div>

                    <div class="row clearfix">
                        {{-- <div id="kontakt-form" class="col col-6">
                            <h3 class="align-center">Kontaktirajte nas:</h3>
                            <form name="obrazac" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                                <p>
                                    <label for="ime">Vaše ime i prezime&ast;</label><br>
                                    <input id="ime" class="full-width" name="imeprezime" type="text" maxlength="100" required>
                                </p>
                                <p>
                                    <label for="adresa">Vaša adresa</label><br>
                                    <input class="full-width" id="adresa" name="adresa" type="text" maxlength="150" required>
                                </p>
                                <p>
                                    <label for="mail">Vaša e-mail adresa&ast;</label><br>
                                    <input class="full-width" id="mail" name="mail" type="email" placeholder="@" required>
                                </p>
                                <p>
                                    <label for="upit">Vaš upit</label><br>
                                    <textarea class="full-width" id="upit" name="upit"></textarea>
                                </p>
                                <p>
                                    <input class="btn" name="reset_btn" type="reset" value="Poništi obrazac">
                                    <input class="btn" name="submit_btn" type="submit" value="Pošaljite upit">
                                </p>
                                <p>
                                    Polja sa oznakom &ast; su obavezna!
                                </p>
                            </form>
                        </div> --}}
                        <!-- .col end -->
                        <div id="onama" class="col col-12 text-center post-title">
                            {{-- <img src="slike/logo.png" alt="Creative Design Agency logo"> --}}
                            <h3>CREATiVE DESiGN AGENCY</h3>
                            <p>Jezerska BB</p>
                            <p>33 515 Orahovica</p>
                            <p>telefon: +385 091 0101010</p>
                            <p>fax: +385 033 0101010</p>
                            <p><a href="mailto:creativedesign@cda.com">creativedesign@cda.com</a></p>
                        </div>
                        <!-- .col end -->
                    </div>
                    <!-- .row end -->
                </section>
                <!-- #kontakt end -->
            </div>
            <!-- .wrapper end-->
            <section class="row" id="karta">
                <div class="container px-4 px-lg-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.6297441738475!2d17.856656387283483!3d45.517531545696194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe7ba4317655fef1!2sOrahova%C4%8Dko%20jezero!5e0!3m2!1sen!2shr!4v1595971867533!5m2!1sen!2shr"
                        width="100%" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <!-- .col end -->
            </section>
            <!-- #karta end -->


                </div>
            </div>
        </main>
@endsection
        
