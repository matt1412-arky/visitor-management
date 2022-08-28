@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    <div class="row">
        <div class="col-xl-8 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Nutrition Verification</h4>
                </div>


                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="row ">
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Food Menu</label>
                                    <input type="text" class="form-control" placeholder="food menu">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Username </label>
                                    <input type="text" class="form-control" placeholder="username ">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Gender</label>
                                    <input type="text" class="form-control" placeholder="gender">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Body Weight</label>
                                    <input type="number" class="form-control" placeholder="body weight in kg">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Body Height</label>
                                    <input type="number" class="form-control" placeholder="body height in cm">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Age</label>
                                    <input type="number" class="form-control" placeholder="age">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="how often do you exercise" class="form-label fs-4"><b class="text-red">*</b>How Often Do You Exercise</label>
                                    <select name="how often do you exercise" class="form-control">
                                        <option value="choose how often do you exercise">Choose how often do you exercise...</option>
                                        <option value="very rarely">Very rarely exercise</option>
                                        <option value="rarely exercise">Rarely exercise</option>
                                        <option value="enough exercise">Enough exercise</option>
                                        <option value="exercise often">Exercise often</option>
                                        <option value="very often exercise">Very often exercise</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Results of Your Calorie Needs</label>
                                    <input type="text" class="form-control" placeholder="results of your calorie needs">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Your Protein Needs for 1 day</label>
                                    <input type="text" class="form-control" placeholder="your protein needs for i day in gram">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Your Carbohydrate Needs for 1 day</label>
                                    <input type="text" class="form-control" placeholder="your carbohydrate needs for 1 day in gram">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Your Fat Needs for 1 day</label>
                                    <input type="text" class="form-control" placeholder="your fat needs for 1 day in gram">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-google">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
