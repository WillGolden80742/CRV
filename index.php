<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honda CRV 2011 2.0 EXL 4X4 - Oportunidade Única!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 18px;
            margin-top: 0;
            margin: 0;
            background: url("bg.jpg") no-repeat center center fixed;
            background-size: cover;
            padding: 45px;
            padding-top: 0;
            padding-bottom: 0;
        }

        .container {
            margin: 0 auto;
            display: inline-block;
            backdrop-filter: blur(10px);
            background-color: rgba(0, 0, 0, 0.75);
        }

        .highlight {
            color: #007BFF;
            font-weight: bold;
        }

        .highlight span {
            color: #fff;
        }

        .price {
            color: #28A745;
            font-size: 1.5em;
        }

        .contact-info {
            margin-top: 20px;
        }

        .location {
            margin-top: 10px;
        }

        .photos {
            height: 100vh;
            width: -webkit-fill-available;
            overflow-y: scroll;
            float: right;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .announcement,
        .photos,
        .details {
            width: 45%;
            display: inline-block;
            vertical-align: top;
        }

        .announcement {
            padding-left: 60px;
            padding-right: 60px;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            height: 100vh;
            color: #fff;
            font-weight: bold;
            overflow-y: auto;
        }

        .phone {
            text-decoration: none;
            color: #007BFF;
            display: inline;
            padding: 10px;
            font-size: 18px;
            /* vertical align middle */
        }

        .phone img {
            width: 38px;
            margin: 0;
            vertical-align: middle;
            /* Adicione esta linha para alinhar verticalmente o ícone */
        }

        .picture-link {
            display: none;
            background-color: rgba(255, 255, 255, 0.5);
            padding: 10px;
            display: flex;
            display: none;
        }

        .picture-link a {
            text-decoration: none;
            font-size: 28px;
            color: white;
        }

        .picture-link a img {
            width: 28px;
            margin: 0;
            vertical-align: middle;
            margin-bottom: 5px;
        }

        ::-webkit-scrollbar {
            width: 20px;
            border: none;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #2b5278;
        }

        ::-webkit-scrollbar-thumb {
            background: white;
            border-radius: 20px;
        }

        ::-webkit-scrollbar-track {
            box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.25);
        }

        ::-webkit-input-placeholder {
            color: #2b5278;
            font-weight: bold;
        }

        .desktop {
            display: block;
        }

        .mobile {
            display: none;
        }

        .announcement-link {
            display: none;
        }

        /* portrait */
        @media (orientation: portrait) {
            .container {
                width: 100%;
            }

            .announcement,
            .photos,
            .details {
                width: -webkit-fill-available;
            }

            .details {
                position: fixed;
                background: rgba(122, 122, 122, 0.9);
                width: 200px;
                left: 0;
                bottom: 50%;
                margin-bottom: 20px;
                border-top-right-radius: 20px;
                border-bottom-right-radius: 20px;
                padding-left: 10px;
                color:black;
            }


            img {
                width: 100%;
                height: auto;
            }

            body {
                padding: 0;
            }

            .picture-link {
                display: block;
            }

            .announcement {
                padding-left: 20px;
                padding-right: 20px;
                padding-bottom: 50px;
            }

            .announcement-link {
                width: -webkit-fill-available;
                height: auto;
                padding-top: 10px;
                padding-bottom: 20px;
                background: rgba(255, 255, 255, 0.9);
                color: blue;
                text-align: center;
                display: block;
                text-decoration: none;
                color: black;
                font-weight: bold;
                font-size: x-large;
            }
        }
    </style>
</head>

<body>
    <a class="phone mobile" href="https://api.whatsapp.com/send?phone=5511953679183">
        <div class="detaill">
            <p class="highlight">
                <!--  whatsapp png icon -->

                <img src="https://img.icons8.com/color/48/000000/whatsapp.png" />
                (11) 95367-9183

            </p>
        </div>
    </a>
    <div class="container" id="announcement">
        <div class="announcement">
            <h2>Honda CRV 2011 2.0 EXL 4X4</h2>
            <p class="picture-link"><a href="#photo">Ver fotos <img src="photo.png"></a></p>
            <p><span class="highlight">Descrição:</span> Modelo: Honda CRV 2011 2.0 EXL 4X4, Transmissão: Automática,
                Combustível: Gasolina, Quilometragem: 98.000 km, Condição: Bem Preservado</p>

            <p><span class="highlight">Recursos Especiais:</span> Tração 4X4, Versão EXL, Câmbio automático, Apenas 98
                mil km rodados, Revisões em dia</p>

            <p class="price"><span class="highlight">Preço:</span> R$58.000,00</p>

            <p class="highlight">Destaque:</p>
            <ul>
                <li>Veículo em ótimo estado de conservação</li>
                <li>Ideal para quem busca conforto, segurança e estilo</li>
                <li>Oportunidade única pelo preço oferecido</li>
            </ul>

            <p class="contact-info"><span class="highlight">Contato:</span> Interessados podem entrar em contato via
                mensagem direta.</p>

            <p class="location"><span class="highlight">Localização: </span> São Paulo, SP</p>
            <a class="phone" href="https://api.whatsapp.com/send?phone=5511953679183">
                <div class="details">
                    <p class="highlight">
                        <!--  whatsapp png icon -->

                        <img src="https://img.icons8.com/color/48/000000/whatsapp.png" />
                        <span>(11) 95367-9183</span>

                    </p>
                </div>
            </a>
        </div>
        <div class="photos" id="photo">
            <a href="#announcement" class="announcement-link">Ver anúncio</a>
            <img src="photos/2df135b3-b5ed-4547-a75d-8200d3981f7e.jpeg">
            <img src="photos/4d2835ff-fc20-4df2-af24-c21e59e67a95.jpeg">
            <img src="photos/07a12f9e-095c-49f0-96f3-b7a18988a9fc.jpeg">
            <img src="photos/7ac53b39-a312-4090-981b-eef26cd83cb6.jpeg">
            <img src="photos/7fadfc22-c5e6-46ab-bdc1-6d5b5a7606a6.jpeg">
            <img src="photos/39f90a86-c5c3-4109-82a8-2035527c3d88.jpeg">
            <img src="photos/46f990d5-6517-4c1e-8bb4-cef069aab209.jpeg">
            <img src="photos/492eb5ae-8de9-463a-903f-c12ca0ae1429.jpeg">
            <img src="photos/90651d9a-aab8-4ab2-bfda-2d4e3e722e4e.jpeg">
            <img src="photos/737892cf-3f9b-45cd-bce2-84498fcfa3c4.jpeg">
            <img src="photos/a5e7d045-786c-450a-baa7-bd77a35c47eb.jpeg">
            <img src="photos/a0644e93-c17d-4837-b2f2-46e73e9da93f.jpeg">
            <img src="photos/af061210-c5be-4f33-b180-f074cd3274bb.jpeg">
            <img src="photos/d42ffcdd-b184-4fb4-8efb-e92e48634e5f.jpeg">
            <img src="photos/d520a4cb-ee89-4a14-9be0-c888f579d339.jpeg">
            <img src="photos/e4dda330-59c4-47aa-a7aa-f5f98fd65e14.jpeg">
            <img src="photos/ee36ed69-a98f-476a-b37f-b01778ef45a6.jpeg">
            <img src="photos/f27c137d-0768-4628-98d5-3513eff689d9.jpeg">
            <img src="photos/fafbc1b0-5427-4a6a-a68e-03d0889316df.jpeg">
        </div>

    </div>
</body>

</html>