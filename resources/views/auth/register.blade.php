@extends('layouts.app-template')

@section('content')

<div class="jumbotron jumbo-register jumbotron-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col s12 m6">
                <div class="login-form">
                    <div class="form-body form-regist">
                    <h3>Register</h3>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname"
                                    placeholder="Last Name">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option>Not set</option>
                            <option>Female</option>
                            <option>Male</option>
                        </select>
                        </div>

                        <div class="form-group">
                            <label for="">Birthday</label>
                            <div class="row">
                                <div class="col">
                                <select class="form-control" id="daybirthday">
                                    <option>Day</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-control" id="monthbirthday">
                                    <option>Month</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="password" class="form-control" id="yearbirthday" placeholder="Year">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email1">Email address</label>
                            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp"
                                placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" 
                            required autocomplete="new-password" placeholder="Confirm Password">
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I agree with terms and conditions</label>
                        </div>
                        
                        <button type="submit" class="btn log-btn">Submit</button>
                        Or
                        <a href="{{ route('login') }}"><span style="color: red;">Already have an account?</span></a>
                    </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
