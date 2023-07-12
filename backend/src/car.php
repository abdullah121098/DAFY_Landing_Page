<?php
include "../database/connection.php";

include_once 'header.php';?>

<div class="container-fluid"> 
    <div class="row g-3">
        <div class="col-6 grid-margin stretch-card ">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Car Details</h4>
                <p class="card-description"></p>
                <form class="forms-sample m-3 mb-2" Method="POST">
                    <div class="form-group" for="name">
                    <label class="col-sm-3 col-form-label">Car Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Car Name" />
                    </div>
                    <div class="form-group">
                    <label class="col-sm-3 col-form-label" for="email">Car Type</label>
                    <input type="text" class="form-control" id="email" placeholder="Car Type" />
                    </div>
                    <button type="submit" class="btn btn-info m-2"> Submit </button>
                    <button class="btn btn-danger m-2">Cancel</button>
                </form>
                </div>
            </div>
        </div>
        <div class="col-6 grid-margin stretch-card ">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Car Details</h4>
                <p class="card-description"></p>
                <form class="forms-sample m-3 mb-2" Method="POST">
                    <div class="form-group" for="name">
                    <label class="col-sm-3 col-form-label">Car Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Car Name" />
                    </div>
                    <div class="form-group">
                    <label class="col-sm-3 col-form-label" for="email">Car Type</label>
                    <input type="text" class="form-control" id="email" placeholder="Car Type" />
                    </div>
                    <button type="submit" class="btn btn-info m-2"> Submit </button>
                    <button class="btn btn-danger m-2">Cancel</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>