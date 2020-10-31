<div class="form-group">
{{--    <div>--}}
{{--        <div x-data="{ open: false }">--}}
{{--            <button @click="open = true">Show More...</button>--}}

{{--            <ul x-show="open" @click.away="open = false">--}}
{{--                <li><button wire:click="sortBy('name')">Name</button></li>--}}
{{--                <li><button wire:click="sortBy('email')">Email</button></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="row" style="padding-top: 30px;">
        <!--                 work row -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3 v-center">
                    <div class="text-right">
                        <div class="adminPageDetailsSearch">
                            <div class="input-group ">
                                {{-- Search Input --}}
                                <input wire:model="search" type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                    <button wire:click="resetSearch()" class="btn btn-primary">X</button>
{{--                                    <svg id="magnifying-glass" xmlns="http://www.w3.org/2000/svg" width="20.16" height="20.164" viewBox="0 0 20.16 20.164">--}}
{{--                                        <path id="Path_42" data-name="Path 42" d="M20.036,19.136l-4.9-4.9a8.6,8.6,0,1,0-.849.849l4.9,4.9a.608.608,0,0,0,.425.179.589.589,0,0,0,.425-.179A.6.6,0,0,0,20.036,19.136ZM1.253,8.6a7.391,7.391,0,1,1,7.391,7.4A7.4,7.4,0,0,1,1.253,8.6Z" transform="translate(-0.05 0)" fill="#272d3b"></path> </svg>--}}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <select wire:model="recordPerPage">
                        <option>3</option>
                        <option>6</option>
                        <option>12</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select wire:model="filterByStatus">
                        <option value="">All</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
            </div>
        </div>


        <div class="col-md-12">
            <div class="dashHomeTable boxshadow py-4 bg-white">
                <div class="">
                    <h4  class="runningorderTextheadingtable">Running Orders</h4>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Status</th>
                            <th scope="col">Joined</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <th scope="row">{{ $customer->id }}</th>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->username }}</td>
                            <td>{{ $customer->status == 1 ? 'Active' : 'Inactive' }}</td>
                            <td>{{ $customer->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{ $customers->links() }}
            </div>
        </div>
    </div>





    {{--<input wire:model="search" type="text" placeholder="Search by Customers Username ..." class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <ul>
        @foreach($customers as $customer)
            <li>{{ $customer->name }}</li>
        @endforeach
    </ul>
    {{ $customers->links() }}
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
</div>

{{--<div>
    <div>
        <input wire:model="search" type="text" placeholder="Search users..."/>

        <ul>
            --}}{{--@foreach($users as $user)
                <li>{{ $user->username }}</li>
            @endforeach--}}{{--
        </ul>
    </div>
</div>--}}
