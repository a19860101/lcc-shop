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
    <nav class="bg-amber-200 py-6">
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
    <section class="bg-blue-600/80 relative w-full">
        <div class="w-10/12 h-[300px] relative">
            <img src="https://picsum.photos/id/98/1600/900" alt=""class="w-full h-full object-cover">
        </div>
        <div class="w-1/2 ml-auto bg-slate-400/50 backdrop-blur rounded-2xl p-8 relative top-[-50px] left-[-50px] z-50">
            <h2 class="text-4xl font-bold">title</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora et quam, fugit nisi totam debitis obcaecati blanditiis architecto minima labore expedita dolorum. Asperiores doloremque officiis eaque quo, nemo iste eum.
            </p>
        </div>
    </section>
    <section class="py-24 bg-amber-400 mt-[-100px] relative">
        <div class="container mx-auto flex flex-wrap">
            <div class="w-1/3 p-4">
                <div class="xl:px-8 sm:px-4 px-1 text-center text-xl">
                    <div class="rounded-full overflow-hidden mb-5 border-4 shadow-lg">
                        <img src="https://picsum.photos/id/94/600" alt="" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-3xl font-bold">title</h3>
                    <p>某某口味</p>
                    <div>12,000</div>
                </div>
            </div>
            <div class="w-1/3 p-4">
                <div class="xl:px-8 sm:px-4 px-1 text-center text-xl">
                    <div class="rounded-full overflow-hidden mb-5 border-4 shadow-lg">
                        <img src="https://picsum.photos/id/94/600" alt="" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-3xl font-bold">title</h3>
                    <p>某某口味</p>
                    <div>12,000</div>
                </div>
            </div>
            <div class="w-1/3 p-4">
                <div class="xl:px-8 sm:px-4 px-1 text-center text-xl">
                    <div class="rounded-full overflow-hidden mb-5 border-4 shadow-lg">
                        <img src="https://picsum.photos/id/94/600" alt="" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-3xl font-bold">title</h3>
                    <p>某某口味</p>
                    <div>12,000</div>
                </div>
            </div>


        </div>
    </section>
</body>
</html>
