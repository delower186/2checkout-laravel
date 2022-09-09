<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>2Checkout</title>
</head>
<body>
<div class="mx-auto container px-6 xl:px-3 py-19 mt-5 mb-5">
    <div class="flex flex-col"> 
        <div class="flex flex-col justify-center">
            <div class="relative">
                <img class="hidden sm:block w-full" src="https://i.ibb.co/HxXSY0j/jason-wang-Nx-Awry-Abt-Iw-unsplash-1-1.png" alt="sofa" />
                <img class="sm:hidden w-full" src="https://i.ibb.co/B6qwqPT/jason-wang-Nx-Awry-Abt-Iw-unsplash-1.png" alt="sofa" />
                <div class="absolute sm:bottom-8 bottom-4 pr-10 sm:pr-0 left-4 sm:left-8 flex justify-start items-start">
                    <p class="text-3xl sm:text-4xl font-semibold leading-9 text-white">Range Comfort Sofas</p>
                </div>
            </div>
        </div>
        @if ($products->count() > 0 )
            <div class="mt-10 grid lg:grid-cols-2 gap-x-8 gap-y-8 items-center">
                @foreach ($products as $product)
                    <div class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 sm:p-28 py-36 px-10 flex justify-center items-center">
                        <img class="group-hover:opacity-60 transition duration-500" src="https://i.ibb.co/q79KfQr/pexels-pixabay-276583-removebg-preview-1.png" alt="sofa-2" />
                        <div class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
                            <div>
                                <p class="group-hover:opacity-60 transition duration-500 text-xl leading-5 text-gray-600 dark:text-white"> {{ $product->name }} </p>
                            </div>
                            <div>
                                <p class="group-hover:opacity-60 transition duration-500 text-xl font-semibold leading-5 text-gray-800 dark:text-white">$ {{ $product->price }}
                                    @php
                                        Delower186\Twocheckout\Http\Controllers\TwocheckoutController::buyNow($product->price);
                                    @endphp
                                </p>
                            </div>
                        </div>
                        <div class="group-hover:opacity-60 transition duration-500 absolute bottom-8 right-8 flex justify-start items-start flex-row space-x-2">
                            <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                            <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                        </div>
                        <div class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
                            <button>
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg" alt="add">
                            </button>
                            <button>
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                                <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg" alt="view">
                            </button>
                            <button>
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like"><img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
                <h1>Sorry! Nothing Found!</h1>
        @endif
    </div>
</div>

{!! $script !!}
</body>
</html>