@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="css/index.css" />
@endsection

@section('main')

<main>
    <div class="container">
        <!-- <div class="stayMotivated">
                <div class="edge_L"><img id="edgeL" src="img/Rectangle_1.png" alt=""></div>
                <div class="textBox">
                    <h2>stay motivated</h2>
                    <p>receive personalized products that will help<br/>elevate your motivation to exercise with <br/>these essentials </p>
                </div>
                <div class="edge_R"><img id="edgeR" src="img/Rectangle_3.png" alt=""></div>
            </div> -->


        <div class="purchase">

                <div class="purchaseSub" id="purchaseSub">
                    Subscription
                    <a href="/chooseType">
                        <div class="mask"></div>
                    </a>
                </div>

            <div class="purchaseOwn" id="purchaseOwn">
                Create Your Own
                <div class="mask"></div>
            </div>
        </div>

        <div class="featuredPackageDetail">
            <div class="featuredPackage">
                <h2>Featured Package</h2>
            </div>
            <div class="featuredPackagePic"></div>
            <div class="featuredPackageDetials"></div>
        </div>


        <div class="howItWorks">
            <div class="textBox">
                <h2>How it works</h2>
            </div>

            <div class="chooseYourPlan">
                <h3>Choose your plan</h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Cras dapibus, leo eu
                    iaculis feugia.</p>
            </div>
            <div class="subscribe">
                <h3>Subscribe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Cras dapibus, leo eu
                    iaculis feugia.</p>
            </div>
            <div class="receiveAndEnjoy">
                <h3>Receive and enjoy</h3>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Cras dapibus, leo eu
                    iaculis feugia.</p>
            </div>
        </div>

        <!-- <div class="whats in the box">
                <div></div>
                <div></div>
                <div></div>
            </div>
    
            <div class="the box">
                <div></div>
                <div></div>
                <div></div>
            </div>
    
            <div class="choose your plan">
                <div></div>
                <div></div>
                <div></div>
            </div>
    
            <div class="a gift that keeps on giving">
                <div></div>
                <div></div>
                <div></div>
            </div>
    
            <div class="gift a loved one">
                <div></div>
                <div></div>
            </div> -->
    </div>

</main>

@endsection