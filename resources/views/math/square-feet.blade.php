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
            <p class="col-12 h1">Square feet Calculator</p>
            <p class="col-12 fs-5">A quick and easy calculator to get square feet.</p>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <form class="form-bg" action="{{ url('/square-feet') }}" method="post">
                    @csrf
                    <div class="h4 text-light">Square feet Calculator</div>
                    <hr>
                    <div class="row ">
                        <span class="py-3">Square feet of </span>
                        <div class="col-12 mb-2 mb-md-0  col-sm-4 col-md-4">
                            <input class="effect-2" name="num1" id="num1" oninput="calculate()" type="number"
                                placeholder="">
                        </div>
                        <div class="col-12 mb-2 mb-md-0 col-sm-4 col-md-4">
                            <input class="effect-2 mx-0" name="num2" id="num2" oninput="calculate()"
                                type="number" placeholder="">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-8 mt-2">
                            <button type="submit" class="btn btn-color" style="width: 100%;">Calculate </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="h3">How to use</div>
            <p>I mean, do we really need to explain how this calculator works? You enter the whole number in the first
                box, then you click "Calculate" and hey presto, we calculate the square feet.</p>
        </div>
        <div class="row mt-5">

            <div class="col-12">
                <p>Here are some examples of what our Square Footage Calculator can do for you.</p>
                <hr>
            </div>
        </div>
        <div class="row">
            @for ($num1 = 4; $num1 <= 20; $num1++)
                @for ($num2 = $num1; $num2 <= $num1 + 4; $num2++)
                    <a href="square-feet/what-is-{{ $num1 }}-square-feet-{{ $num2 }}"
                        class="col-md-6 col-sm-6 col-12 text-center my-2  ">
                        how many square feet is a {{ $num1 }}x{{ $num2 }} room?
                    </a>
                @endfor
            @endfor
        </div>
    </div>
    </div>

    @include('math.math-footer')
</body>
<script>
    function calculate() {
        var num1 = document.getElementById('num1').value;
        document.getElementById('num').setContent(num1);
        var num2 = document.getElementById('num2').value;
        document.getElementById('num').setContent(num2);
    }
</script>
@include('math.math-scripts')

</html>
