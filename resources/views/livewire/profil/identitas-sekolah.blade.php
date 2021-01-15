<div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
    <div class="carousel-inner" style="background-color: rgb(58, 141, 60)">
        <div class="carousel-item active">
            <img class="d-block w-auto mx-auto d-block" style="height: 512px;" src="/tpl/img/hero-bg.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block w-auto" style="background-color: rgba(76, 175, 80, 0.8)">
            <h4>SLIDE 1</h4>
            <p>Ini gambar</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-auto mx-auto d-block" style="height: 512px;" src="/tpl/img/hero-bg.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(76, 175, 80, 0.8)">
            <h4>SLIDE 2</h4>
            <p>Ini gambar</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-auto mx-auto d-block" style="height: 512px;" src="/tpl/img/hero-bg.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(76, 175, 80, 0.8)">
            <h4>SLIDE 3</h4>
            <p>Ini gambar</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
<!-- </section> -->


<main id="main">

    <!-- ======= Identitas Sekolah Section ======= -->
    <section id="identitasSekolah" class="identitasSekolah" style="
    padding-top: 0px;">
    <div class="container">
            <div class="row">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="section-title">
                        <h2 class="mt-4">Identitas Sekolah</h2>
                    </div>
                        <div class="entry-content-page">
                            @auth
                                {{-- <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalIdentitas">Edit Data</button> --}}
                                <button type="button" class="btn btn-outline-primary" wire:click="showEditIdentitasModal">Edit Data</button>
                            @endauth
                            <ul class="list-group list-group-flush mt-3">
                                <li class="list-group-item">Nama Sekolah &ensp; :</li>
                                <li class="list-group-item">NIS &ensp; :</li>
                                <li class="list-group-item">Alamat &ensp; :</li>
                                <li class="list-group-item">Kabupaten &ensp; :</li>
                                <li class="list-group-item">Negara &ensp; :</li>
                                <li class="list-group-item">Email &ensp; :</li>
                                <li class="list-group-item">Website &ensp; :</li>
                                <li class="list-group-item">Telepon &ensp; :</li>
                                <li class="list-group-item">POS &ensp; :</li>
                              </ul>
                            {{-- <div class="card mt-4 p-4"> --}}
                                
                                {{-- <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td  style="padding-top: 10px;">SMKN 1 Grujugan</td>
                                            <td  style="padding-top: 10px;">SMKN 1 Grujugan</td>
                                            <!-- <th width="10.1%">Action</th> -->
                                        </tr>
                                    </tbody>
                                </table> --}}
                            {{-- </div> --}}
                        </div>
                </div>
                
            </div>

        </div>
    </section>
    <!-- End visiMisiTujuan Section -->
</main>
<!-- End #main -->

<!-- Modal -->
<div class="modal fade" wire:model="modalIdentitas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>


  {{-- modal form --}}
    {{-- <x-jet-dialog-modal wire:model="modalIdentitas">
        <x-slot name="title">
            {{ __('Delete Account') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}

            <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                <x-jet-input type="password" class="mt-1 block w-3/4"
                            placeholder="{{ __('Password') }}"
                            x-ref="password"
                            wire:model.defer="password"
                            wire:keydown.enter="deleteUser" />

                <x-jet-input-error for="password" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalIdentitas')" wire:loading.attr="disabled">
                {{ __('Nevermind') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                {{ __('Delete Account') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal> --}}
</div>


