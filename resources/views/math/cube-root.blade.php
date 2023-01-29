<!doctype html>
<html>

<head>
    @include('links')
    <link href="{{ URL::asset('assets/css/percentage-show.css') }}" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
            color: #b26200;
        }
    </style>
</head>

<body style="font-size: 1.2rem">
    @include('navbar')
    <div class="container w-full mt-md-10 mt-3">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-12">

                <div class="row">
                    <p class="col-12 my-3 h2">Cube Root of Numbers Calculator
                    </p>
                    <h4 class="col-12" style="color: #0a4b78;  ">
                        In this article, we'll explore what cube root means in math and discuss some of the terms you
                        might use when working with cube roots or perfect cubes.</h4>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>In math you might hear the term "root" used. One of the most common is the <a
                                href="/square-root">square root.</a>
                        </p>
                        <p>A root is simply a number which produces a whole number when it is raised to a certain power
                            (which means multiplying by itself a specific number of times).
                        </p>
                        <p>Let's take a look at an example with the number <span class="col-4 p-1"
                                style="background-color:rgb(236, 236, 236); font-weight:600">27</span>. We can see that
                            the 3rd root of 27 is the number 3:</p>
                        <h3>3<sup>3</sup>= 3 × 3 × 3 = 27</h3>
                        <p>You might have guessed that the third root is also called the cube root. It's most often used
                            to solve cubic equations like calculating the volume of a three dimensional object.</p>
                        <p>The symbol for a cube root is very similar to the symbol for square root, which is called the
                            radical symbol: <span class="col-4 p-1"
                                style="background-color:rgb(236, 236, 236); font-weight:600">√</span>.</p>
                        <p>Any number that is placed alongside the symbol are called radical terms, or radicals.</p>
                        <p>Here is what the cube root symbol looks like: <span class="col-4 p-1"
                                style="background-color:rgb(236, 236, 236); font-weight:600">∛</span>.</p>
                        <p>There is a number above the radical symbol which is called the index, and this index
                            determines how many times you multiply the number by itself.</p>
                        <p>So, going back to the example of 27, we would show that as a cube root calculation using the
                            below:</p>
                        <h2>∛27 = 3</h2>
                        <p>With a cube root, the result of the calculation can be any real number - including positive
                            numbers, negative numbers, or even zero. This is different from square roots, where the
                            number cannot be negative or zero.</p>
                        <p>Another difference with cube roots is that the radicand (the number 27 in the example) can
                            also be a negative number and it will still produce a real result.</p>
                        <h1>Calculator</h1>
                        <p>Try out the cube root calculator below to calculate cube roots of various numbers and see how
                            it works.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-12">
                        <form class="form-bg" action="{{ url('/cube-root') }}" method="post">
                            @csrf
                            <hr>
                            <div class="row ">
                                <div class="col-12">
                                    <h4 text-center>Enter your number in box A below and click "Calculate" to work out
                                        the cube root of the given number.</h4>
                                </div>
                                <div class="col-12 mb-2 mb-md-0 col-sm-12 col-md-12">
                                    <input class="effect-2 mx-0 p-3" name="num1" id="num1" type="number"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 m-auto mt-4">
                                    <button type="submit" class="btn btn-color rounded" style="width: 100%;">Calculate
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <h2>Perfect Cube Numbers</h2>
                        <p>Just like we have with square roots and perfect squares, when the cube root of a number is a
                            whole number, we call it a perfect cube number.</p>
                        <p>These are important for a lot of different math functions and can be used in simpler settings
                            like carpenty and room design all the way through to more advanced calculations in physics
                            and astronomy.</p>
                        <p>For our example above using the number 27, we already know that it's a perfect cube because
                            we worked out that the cube root is 3, and this is a whole number.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2>Practice Cube Roots Using Examples</h2>
                        <p>If you made it this far down the page you must be a very dedicated cube root enthusiast!</p>
                        <p>In the sidebar on the right hand side we have a list of randomly generated cube root
                            calculations for you to explore. Click any of them to be given details on how to calculate
                            it, what the answer is, and whether or not the number is a perfect cube.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="w-full py-2 rounded-4 right-section mb-4 px-2">
                    <h4>Random Supplementary Angle Calculations</h4>
                    @for($nume1 = 2; $nume1 <= 50; $nume1++)
                        <div class="m-0"><a href="cube-root/what-is-the-cube-root-of-{{$num1=random_int(1,1000)}}"><p> Cube root of {{$num1}}</p></a>
                        </div>
                    @endfor
                </div>
                @include('math.right-section-math')
            </div>
        </div>
    </div>

    @include('math.math-footer')
</body>
<script>
    function calculate() {
        let price = document.getElementById('price').value;
        let result = price * 4 * 4;
        document.getElementById('result').value = result;
    }
</script>
@include('math.math-scripts')

</html>
