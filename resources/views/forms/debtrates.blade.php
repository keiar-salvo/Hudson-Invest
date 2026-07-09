@extends('layouts.master')
@section('content')
<div class="animate__animated p-6" :class="[$store.app.animation]">
    <!-- start main content section -->
    <div x-data="personaldetails">
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline"><b>Forms / Debt Rates</b></a>
            </li>

        </ul>

    </div>
    <!-- end main content section -->
    <br />
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">

        <form class="">

            <fieldset class="group-box">
                <legend class="group-title">Personal Debt Rates</legend>


                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Mortgage Rates</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Personal Loans</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Car Loans</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Other Debt 1</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <br />
                <div class="col-span-1 md:col-span-3">
                    <label>Other Debt 2</label>
                    <input type="text" class="mt-1 form-input" placeholder="0%">
                </div>


                <div class="col-span-1 md:col-span-3">
                    <label>Years</label>
                    <input type="text" class="mt-1 form-input">
                </div>


                <br />
                <div class="col-span-1 md:col-span-3">
                    <label>Credit Card 1</label>
                    <input type="text" class="mt-1 form-input" placeholder="0%">
                </div>


                <div class="col-span-1 md:col-span-3">
                    <label>Years</label>
                    <input type="text" class="mt-1 form-input">
                </div>


                <br />
                <div class="col-span-1 md:col-span-3">
                    <label>Credit Card 2</label>
                    <input type="text" class="mt-1 form-input" placeholder="0%">
                </div>


                <div class="col-span-1 md:col-span-3">
                    <label>Years</label>
                    <input type="text" class="mt-1 form-input">
                </div>


            </fieldset>
            <fieldset class="group-box">
                <legend class="group-title">Personal Debt Rates</legend>


                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Mortgage Rates</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Personal Loans</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Car Loans</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Other Debt 1</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Other Debt 2</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Credit Card 1</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Credit Card 2</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input">
                    </div>

                </div>
                <br />




            </fieldset>


            <fieldset class="group-box">
                <legend class="group-title">Investment Debt Rates</legend>


                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Margin/Investment Loans</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Business Loans</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>


                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Mortgage - Existing Investment Properties</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>




                </div>
                <br />
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Mortgage - New Investment Properties</label>
                        <input type="text" class="mt-1 form-input" placeholder="0%">
                    </div>




                </div>
                <br />




            </fieldset>




    </form>
     <br />
    <button type="submit" class="btn btn-primary btn-details" style="position:relative; bottom:20px;right:20px;float:right;">
        Save
    </button>
    </div>
      
   



</div>
@section('scripts')
<script>
    $(document).ready(function() {
        $(".btn-details").click(function() {
            Swal.fire({
                title: "Successfully Saved!",
                icon: "success",
                draggable: true
            });
        })
    });
</script>
@endsection
@endsection