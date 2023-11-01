<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
    <nav class="bg-amber-200 py-10">
        <div class="container mx-auto flex flex-wrap">
            <div class="w-1/3"></div>
            <div class="w-1/3 text-center">
                <a href="#" class="text-2xl font-weight text-red-500">
                LOGO
                </a>
            </div>
            <div class="w-1/3 text-right">
                <a href="#">登入</a>
                <a href="#">註冊</a>
            </div>
            <div class="w-full text-center mt-5">
                <a href="#">品牌故事</a>
                <a href="#">所有商品</a>
                <a href="#">期間限定</a>
                <a href="#">優惠活動</a>
            </div>
        </div>
    </nav>
    <header class="w-full aspect-[21/9]">
        <img src="https://picsum.photos/id/35/1600/900" alt="" class="w-full h-full object-cover">
    </header>
    <section class="bg-blue-600 h-[600px] relative w-full">
        <div class="w-full h-[300px] absolute top-[-100px] left-[-200px]">
            <img src="https://picsum.photos/id/33/1600/900" alt=""class="w-full h-full object-cover">
        </div>
        <div>
            <h2>title</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora et quam, fugit nisi totam debitis obcaecati blanditiis architecto minima labore expedita dolorum. Asperiores doloremque officiis eaque quo, nemo iste eum.
            </p>
        </div>
    </section>
</body>
</html>
