<!doctype html>
<html>

<head>
    @include('links')
    <style>
        a {
            text-decoration: none;
            color: #b26200;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="manual-container w-full mt-md-5 mt-3">
        <div class="row">
            <p class="col-12 h1">Divisible by Anything Calculator</p>
            <p class="col-12 fs-5">A quick and easy calculator to check if one number is divisible by any other.</p>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <form class="form-bg" action="{{ url('/divisible-by-anything')}}" method="post">
                    @csrf
                    <hr>
                    <div class="row">
                            <div class="col-12">
                                <span>Enter a number </span>
                                <input class="effect-2" name="num1" id="num1" oninput="calculate()" type="text" placeholder="">
                            </div>
                            <div class="col-6 m-auto mt-2">
                                <button type="submit"  class="btn btn-color"
                                    style="width: 100%;">Calculate </button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="h3">How to use</div>
            <p>I mean, do we really need to explain how this calculator works? You enter the whole number in the box, then you click "Calculate" and hey presto, we calculate the whether the number is divisible by anything.</p>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <p class="h2">Preset List of Divided by Anything</p>
            </div>
            <div class="col-12">
                <p>Below are links to some preset calculations that are commonly searched for to check if a number is divisible by anything:</p>
                <hr>
            </div>
        </div>
        <div class="row">
            @for($nume1 = 2; $nume1 <= 1000; $nume1++)
            <div class="col-md-4"><a href="divisible-by-anything/is-{{$nume1}}-divisible-by-anything"><p>is {{$nume1}} divisible by anything ?</p></a>
            </div>
            @endfor
        </div>
    </div>

    @include('math.math-footer')
</body>
<script>
    function calculate() {
        var num1 = document.getElementById('num1').value;
        document.getElementById('num').setContent(num1);
    }
</script>
@include('math.math-scripts')
</html>
