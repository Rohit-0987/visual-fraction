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
            <h1 class="col-12 ">Divided by What Equals Calculator</h1>
            <p class="col-12 fs-5">A quick and easy calculator to solve simple division equations.</p>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <form class="form-bg" action="{{ url('/divided-by-what') }}" method="post">
                    @csrf
                    <hr>
                    <div class="row">
                        <div class="col-12 text-center">
                            <input class="effect-2" name="num1" id="num1" type="number" placeholder="">
                        </div>
                        <div class="col-12 text-center">
                            <span class="py-3 text-center">divided by what equals </span>
                            <input class="effect-2 mx-0" name="num2" id="num2" type="number" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 m-auto mt-2">
                            <button type="submit" class="btn btn-color" style="width: 100%;">Calculate </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="h3">How to use</div>
            <p>I mean, do we really need to explain how this calculator works? You enter the whole number in the first
                box, then the answer you want in the second box, you click "Calculate" and hey presto, we calculate the
                missing number for you</p>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="">Preset List of Divided by What Equals</h2>
            </div>
            <div class="col-12">
                <p>Below are links to some preset fraction to calculations that are commonly searched for:</p>
                <hr>
            </div>
        </div>
        <div class="row">
            @for ($num1 = 1; $num1 <= 99; $num1++)
                @for ($num2 = 1; $num2 <= 100; $num2++)
                    
                    <a href="/divided-by-what/{{$num1}}-divided-by-what-equals-{{$num2}}"
                        class="col-md-4 col-sm-6 col-12 text-center my-2">
                        {{$num1}} divided by what equals {{$num2}}
                    </a>
                @endfor
            @endfor
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
