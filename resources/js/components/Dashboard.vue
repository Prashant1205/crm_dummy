<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top:80px;">
                    <div class="card-body">
                        <div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Customer Name</label>
                                        <input type="text" class="form-control" value="" v-model="custname">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Registered Phone Number</label>
                                        <input type="text" class="form-control" value="" v-model="custphone">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" >
                                        <button type="button" class="btn btn-primary pull-right" v-on:click="getData(custname,custphone)" @click="show = !show" >Verify</button>
                                        <!--<label class="bmd-label-floating">Email address</label>
                                        <input type="email" class="form-control">-->
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="show" v-if="show">
                                <hr/>
                                <div class="fetch-detail mr-auto mt-3 mb-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6>Merchant Detail</h6>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group is-filled">
                                                        <label class="bmd-label-floating">Name: </label>
                                                        <label class="form-control" disabled>Test Demo</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group is-filled">
                                                        <label class="bmd-label-floating">Business
                                                            Name: </label>
                                                        <label class="form-control" disabled>Just Ride</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group is-filled">
                                                        <label class="bmd-label-floating">City: </label>
                                                        <label class="form-control" disabled>Noida</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group is-filled">
                                                        <label class="bmd-label-floating">State: </label>
                                                        <label class="form-control" disabled>Uttar
                                                            Pradesh</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6>Account Detail</h6>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group is-filled">
                                                        <label class="bmd-label-floating">UPI id: </label>
                                                        <label class="form-control" disabled>BHARATPE01234567890@YESBANKLTD</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group is-filled">
                                                        <label class="bmd-label-floating">Settlement
                                                            type: </label>
                                                        <label class="form-control" disabled>initial</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group is-filled">
                                                        <label class="bmd-label-floating">Change Date: </label>
                                                        <label class="form-control" disabled>20/02/2019</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6>Agent Detail</h6>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group is-filled">
                                                        <label class="bmd-label-floating">Name: </label>
                                                        <label class="form-control" disabled>Test Demo1</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group is-filled">
                                                        <label class="bmd-label-floating">City: </label>
                                                        <label class="form-control" disabled>Noida</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group is-filled">
                                            <label class="bmd-label-floating mb-0">Status</label>
                                            <select class="selectpicker" data-style="select-with-transition"
                                                    title="Choose Status" data-size="7">
                                                <option disabled>Select Options</option>
                                                <option value="2">Paris</option>
                                                <option value="3">Bucharest</option>
                                                <option value="4">Rome</option>
                                                <option value="5">New York</option>
                                                <option value="6">Miami</option>
                                                <option value="7">Piatra Neamt</option>
                                                <option value="8">Paris</option>
                                                <option value="9">Bucharest</option>
                                                <option value="10">Rome</option>
                                                <option value="11">New York</option>
                                                <option value="12">Miami</option>
                                                <option value="13">Piatra Neamt</option>
                                                <option value="14">Paris</option>
                                                <option value="15">Bucharest</option>
                                                <option value="16">Rome</option>
                                                <option value="17">New York</option>
                                                <option value="18">Miami</option>
                                                <option value="19">Piatra Neamt</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group is-filled">
                                            <label class="bmd-label-floating mb-0">Sub Status</label>
                                            <select class="selectpicker" data-style="select-with-transition"
                                                    title="Choose Sub Status" data-size="7">
                                                <option disabled>Select Options</option>
                                                <option value="2">Paris</option>
                                                <option value="3">Bucharest</option>
                                                <option value="4">Rome</option>
                                                <option value="5">New York</option>
                                                <option value="6">Miami</option>
                                                <option value="7">Piatra Neamt</option>
                                                <option value="8">Paris</option>
                                                <option value="9">Bucharest</option>
                                                <option value="10">Rome</option>
                                                <option value="11">New York</option>
                                                <option value="12">Miami</option>
                                                <option value="13">Piatra Neamt</option>
                                                <option value="14">Paris</option>
                                                <option value="15">Bucharest</option>
                                                <option value="16">Rome</option>
                                                <option value="17">New York</option>
                                                <option value="18">Miami</option>
                                                <option value="19">Piatra Neamt</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group is-filled">
                                            <label class="bmd-label-floating">Populate text</label>
                                            <label disabled class="form-control">auto text</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <p>For Payment pending case...</p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group datepicker-div">
                                                    <label class="bmd-label-floating">Select Date Range</label>
                                                    <input type="text" class="form-control datepicker"
                                                            name="datefilter" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">UPI id</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row google-form-section">
                                    <div class="col-md-3">
                                        <div class="form-group mt-xl-4">
                                            <button type="button" class="btn btn-secondary pull-left">Send SMS
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label class="bmd-label-floating mb-0">Google form</label>
                                            <select class="selectpicker" data-style="select-with-transition"
                                                    title="Choose Status" data-size="3">
                                                <option disabled>Select Options</option>
                                                <option value="2">Account Change</option>
                                                <option value="3">Payment Issue</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 checkbox-radios">
                                        <div class="col-md-4"></div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio"
                                                        name="exampleRadios" value="option1">Payment Team
                                                <span class="form-check-sign"><span class="check"></span></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio"
                                                        name="exampleRadios" value="option2">Backend Team
                                                <span class="form-check-sign"><span class="check"></span></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio"
                                                        name="exampleRadios" value="option3">Call Back
                                                <span class="form-check-sign"><span class="check"></span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row remark-section">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Write some remark...</label>
                                                <textarea class="form-control" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Update Profile
                                </button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    created(){
        this.getData();

    },
    data(){
        return {  
            show : false,
            custname: '',
            custphone: ''
        };
    },
    methods:{
        submitData(custname,custphone){
            this.errors = {};
                this.$http.post('/checkMerchant', this.fields).then(response => {
                alert('Message sent!');
            }).catch(error => {
            if (error.response.status === 422) {
                this.errors = error.response.data.errors || {};
            }
            });
        },
        getData(custphone){
        this.$http.get('checkMerchant')
       .then((response) => console.log(response.data.alldata))
       .catch((error) => console.log(error));
        }
    },
}
</script>
