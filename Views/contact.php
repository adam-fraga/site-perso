<!--  PARTIE  CONTACT-->
<?php
if (isset($_POST['submit']) && isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['msg'])):
    $_POST['fname'] = htmlspecialchars($_POST['fname']);
    $_POST['msg'] = htmlspecialchars($_POST['msg']);
    $_POST['email'] = htmlspecialchars($_POST['email']);
    $fname = strip_tags($_POST['fname']);
    $msg = strip_tags($_POST['msg']);
    $email = strip_tags($_POST['email']);
    $regmail = '/^[\w\-]+(\.[\w\-]+)*@[\w\-]+(\.[\w\-]+)*\.[\w\-]{2,}$/';
    $checkMail = preg_match($regmail, $email) ? true : false;
    if ($checkMail === true) {
        // Le message
        $message = $msg;
// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
        $message = wordwrap($message, 70, "\r\n");
// Envoi du mail
        mail('adam.fraga@laplateforme.io', $fname, $message);
    } else $email = false;
else: $input = false;
endif;
//?>
<main>
    <section style="height: 100vh" class="p-12">
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="mb-12 title-font mb-4 text-4xl font-extrabold leading-10 tracking-tight sm:text-3xl sm:leading-none md:text-2xl text-gray-800"
                        data-aos="fade-in" data-aos-delay="200">ENTRONS EN CONTACTE</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mt-12 justify-center my-32">
                <div data-aos="fade-in" data-aos-delay="500" class="w-full lg:w-3/12 px-4 text-center">
                    <div
                            class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                    >
                        <i class="fas fa-book-open text-xl"></i>
                    </div>
                    <h6 class="text-xl mt-5 font-semibold text-gray-800">
                        Devis Gratuit
                    </h6>
                    <p class="mt-2 mb-4 text-gray-400">
                        Un site internet est bien plus qu'un simple outil, il vous permet surtout de générer plus de
                        trafic pour votre activités. Contacter moi pour un Devis gratuit.
                    </p>
                </div>
                <div data-aos="fade-in" data-aos-delay="800" class="w-full lg:w-3/12 px-4 text-center">
                    <div
                            class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                    >
                        <i class="fas fa-comment-medical text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-gray-800">
                        Conseils pour votre site
                    </h5>
                    <p class="mt-2 mb-4 text-gray-400">
                        Vous disposez déja d'un site Web mais avez besoin de conseil quand à l'optimisation de celui-ci?
                    </p>
                </div>
                <div data-aos="fade-in" data-aos-delay="1100" class="w-full lg:w-3/12 px-4 text-center">
                    <div
                            class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
                    >
                        <i class="fab fa-stack-exchange text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-black">Échanger simplement</h5>
                    <p class="mt-2 mb-4 text-gray-400">
                        Que vous soyez un recruteur, un client curieux ou encore un développeur passionné, c'est avec
                        plaisir que j'échangerai avec vous !
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative block py-24 lg:pt-0 bg-white my-32" data-aos="fade-in" data-aos-delay="500">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                <div class="w-full lg:w-6/12 px-4">
                    <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-black"
                    >
                        <div class="flex-auto p-5 lg:p-10">
                            <h4 class="text-2xl text-yellow-300 font-semibold">Vous souhaitez me contacter?</h4>
                            <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                                Completez ce formulaire, je vous répond dans les 24h.
                            </p>
                            <!--                            FORMULAIRE DE MESSAGE-->
                            <form action="" method="post">
                                <div class="relative w-full mb-3 mt-8">
                                    <label
                                            class="block uppercase text-gray-300 text-xs font-bold mb-2"
                                            for="first-name"
                                    >Prénom</label
                                    ><input
                                            id="first-name"
                                            name="fname"
                                            type="text"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Prénom"
                                            style="transition: all 0.15s ease 0s;"
                                    />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label
                                            class="block uppercase text-gray-300 text-xs font-bold mb-2"
                                            for="email"
                                    >Email</label
                                    ><input
                                            id="email"
                                            type="email"
                                            name="email"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="nom@example.com"
                                            style="transition: all 0.15s ease 0s;"
                                    />

                                </div>

                                <div class="relative w-full mb-3">
                                    <label
                                            class="block uppercase text-gray-300 text-xs font-bold mb-2"
                                            for="msg"
                                    >Message</label>
                                    <textarea
                                            id="msg"
                                            rows="4"
                                            name="msg"
                                            cols="80"
                                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                            placeholder="Entrez votre message..."
                                    ></textarea>
                                </div>
                                <div class="text-center mt-6">
                                    <?= isset($email) && $email = false ? '<p class="text-red-500">Votre email est invalide</p>' : '' ?>
                                    <?= isset($input) && $input = false ? '<p class="text-red-500">Merci de renseigner tout les champs</p>' : '' ?>

                                    <button
                                            class="bg-yellow-300 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                            type="submit"
                                            value="submit"
                                            style="transition: all 0.15s ease 0s;"
                                    >
                                        Envoyer mon message
                                    </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>