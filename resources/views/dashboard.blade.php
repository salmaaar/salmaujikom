@extends('layouts/app')

@section('content')

<!-- Content Row -->
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow border-left-success">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Monthly)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sales Overview</h6>
            </div>
            <div class="card-body">
                <canvas id="myAreaChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pet Category Distribution</h6>
            </div>
            <div class="card-body">
                <canvas id="myPieChart"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Products Row -->
<div class="row">
    <div class="col-lg-12 mb-4">
        <!-- Products Card -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Available Products</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dog Food</td>
                            <td>Dog Supplies</td>
                            <td>$25.00</td>
                        </tr>
                        <tr>
                            <td>Cat Litter</td>
                            <td>Cat Supplies</td>
                            <td>$15.00</td>
                        </tr>
                        <tr>
                            <td>Pet Toys</td>
                            <td>General Supplies</td>
                            <td>$10.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-lg-6 mb-4">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Latest Projects</h6>
            </div>
            <div class="card-body">
                <p>Project 1: Adoption Event</p>
                <p>Project 2: Pet Food Drive</p>
                <p>Project 3: Community Awareness</p>
            </div>
        </div>

        <!-- Color System -->
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card bg-primary text-white shadow">
                    <div class="card-body">Dog Lovers</div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-success text-white shadow">
                    <div class="card-body">Cat Lovers</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mb-4">
        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pet Illustrations</h6>
            </div>
            <div class="card-body text-center">
                <img src="{{ asset('images/pets.png') }}" alt="Pets" class="img-fluid">
            </div>
        </div>

        <!-- Approach -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Our Approach</h6>
            </div>
            <div class="card-body">
                <p>At OpetShop, we are dedicated to the well-being of pets and providing the best services for pet owners. Join us in supporting our furry friends!</p>
            </div>
        </div>
    </div>
</div>

<!-- Recommended Products Row -->
<div class="row">
    <div class="col-lg-12 mb-4">
        <!-- Recommended Products Card -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Recommended Products</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/dog_food.png') }}" class="card-img-top" alt="Dog Food">
                            <div class="card-body">
                                <h5 class="card-title">Premium Dog Food</h5>
                                <p class="card-text">$25.00</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/cat_litter.png') }}" class="card-img-top" alt="Cat Litter">
                            <div class="card-body">
                                <h5 class="card-title">Eco-Friendly Cat Litter</h5>
                                <p class="card-text">$15.00</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/pet_toys.png') }}" class="card-img-top" alt="Pet Toys">
                            <div class="card-body">
                                <h5 class="card-title">Interactive Pet Toys</h5>
                                <p class="card-text">$10.00</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
