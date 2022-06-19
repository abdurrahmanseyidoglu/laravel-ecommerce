@include('header')

<section style="margin-top: 100px;" class="container ">
    <!--Contact heading-->
    <div class="row">

        <!--Grid column-->
        <div class="col-sm-12 mb-4 col-md-5">
            <!--Form with header-->
            <div class="card border-info rounded-2">
                <div class="card-header p-0">
                    <div class="bg-info text-white text-center rounded-1 py-2">
                        <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                        <p class="m-0">We’ll write rarely, but only the best content.</p>
                    </div>
                </div>
                <div class="card-body p-3">

                    <div class="form-group">
                        <label> Your name </label>
                        <div class="input-group">
                            <input value="" type="text" name="data[name]" class="form-control"
                                id="inlineFormInputGroupUsername" placeholder="Your name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Your email</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <input type="email" value="" name="data[email]" class="form-control"
                                id="inlineFormInputGroupUsername" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <input type="text" name="data[subject]" class="form-control"
                                id="inlineFormInputGroupUsername" placeholder="Subject">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <input type="text" class="form-control" name="mesg">
                        </div>
                    </div>
                    <div class="text-center">
                        <script>
                            const sendContact = () => {
                                toastr.success('Are you the 6 fingered man?')
                            }
                        </script>
                        <input type="submit" name="submit" value="submit" onclick="sendContact()"
                            class="btn btn-info btn-block rounded-2 py-2">
                    </div>

                </div>

            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-sm-12 col-md-7">
            <!--Google map-->
            <div class="mb-4">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48168.045019394085!2d28.918601975055395!3d41.0142542006847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab989e5fae399%3A0x34f0847eed8b22e0!2zRmF0aWgvxLBzdGFuYnVs!5e0!3m2!1sen!2str!4v1653481796489!5m2!1sen!2str"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                    aria-hidden="false" tabindex="0"></iframe>
            </div>
            <!--Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                    <a class="bg-info px-3 py-2 rounded text-white mb-2 d-inline-block"><i
                            class="fa fa-map-marker"></i></a>
                    <p> Istanbul/Fatih </p>
                </div>
                <div class="col-md-4">
                    <a class="bg-info px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                    <p>+123 456 78 99</p>
                </div>
                <div class="col-md-4">
                    <a class="bg-info px-3 py-2 rounded text-white mb-2 d-inline-block"><i
                            class="fa fa-envelope"></i></a>
                    <p> e-commerce@gmail.com</p>
                </div>
            </div>
        </div>
        <!--Grid column-->
    </div>
</section>
