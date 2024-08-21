<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ড্যাশবোর্ড লগইন</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome kit setup -->
    <script src="https://kit.fontawesome.com/32dcd4a478.js" crossorigin="anonymous"></script>
    <style type="text/css">
        body{
            background:url('{{ asset('/public/') }}/images/loginBg.jpg');
            background-size: cover;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row align-items-center vh-100">
            <div class="col-10 col-md-9 mx-auto mt-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row ‍align-items-center mt-4">
                            <div class="col-12 col-md-5 mx-auto">
                                <div class="text-center">
                                    <i class="fa-sharp fa-solid fa-gauge fa-beat fa-2xl fa-beat mb-4"></i>
                                    <div class="h2 fw-bold">একাউন্ট লগইন</div>
                                    <div class="mb-4">লগইন করতে সরবরাহকৃত কার্ড এর আই.ডি এবং পিন নাম্বার ব্যবহার করুন</div>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-duotone fa-solid fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="ইউজার আই.ডি দিন" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-light fa-key-skeleton"></i></span>
                                    <input type="text" class="form-control" placeholder="আপনার লগইন পিন দিন">
                                </div>

                                <div class="input-group mb-3">
                                    <!-- Button trigger modal -->
                                    <a href="#" class="nav-link text-primary fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    পিন/আই.ডি ভুলে গেছেন?
                                    </a>
                                </div>

                                <div class="input-group mb-3 text-center">
                                    <button type="submit" class="btn btn-success me-2">লগইন</button>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 mx-auto text-center">
                                <div class="h2 fw-bold">স্মার্ট ইউনিয়ন অ্যাপ</div>
                                <div class="mb-4">নতুন ইউজার আই.ডি এবং পিন নাম্বার পেতে হলে আপনার নিকটস্থ ইউনিয়ন পরিষদে যোগাযোগ করুন এবং আপনার তথ্য ঘরে বসেই ম্যানেজ করুন। একজন সাধারন ব্যবহারকারী থেকে শুরু করে ব্যবসায়ী একজন কমার্শিয়াল ব্যবহারকারী হিসেবে আপনি আমাদের এই অ্যাপটি ব্যবহারের মাধ্যমে আপনার সকল প্রকার সনদ সংগ্রহ, কর পরিশোধ, ব্যবসায়ীক লাইসেন্স, বানিজ্যিক সুবিধা গ্রহণ করতে পারবেন।</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>