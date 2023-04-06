<style>
.counters {
    background: #fff;
    color: black;
    padding: 40px 20px;
}

section {
    position: relative;
}

*,
::after,
::before {
    box-sizing: border-box;
}

user agent stylesheet section {
    display: block;
}

@media (max-width: 575.98px) body {
    font-size: 1rem;
}
@media (max-width: 770px)
.counters .container1 {
    grid-template-columns: repeat(1, 1fr);
}
.counters .container1 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 30px;
    text-align: center;
}
.container1 {
    margin: 50px 0px;
    overflow: auto;
    text-align: center;
} 
</style>


<section class="counters">
    <div class="container1">
        <div>
            <i class="fa fa-group fa-4x"></i>
            <div id="youth" class="counter" data-target="36005">36005</div>
            <h3>Youth</h3>
        </div>
        <div>
            <i class="fa fa-newspaper-o fa-4x"></i>
            <div id="activities" class="counter" data-target="76938">76938</div>
            <h3>Activities</h3>
        </div>
        <div>
            <i class="fa fa-child fa-4x"></i>
            <div id="YL" class="counter" data-target="8432">8432</div>
            <h3>Young Leaders</h3>
        </div>
    </div>
</section>