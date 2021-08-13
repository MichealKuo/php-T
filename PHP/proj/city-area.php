<?php
    include __DIR__. '/partials/init.php';
    $title = '選擇地區測試';
?>
<?php include __DIR__. '/partials/html-head.php'; ?>
<?php include __DIR__. '/partials/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <form action="" method="post">
                <div class="form-group">
                    <label for="city_sel">選擇縣市</label>
                    <select class="form-control" id="city_sel" name="city_sel">
                    </select>
                </div>

                <div class="form-group">
                    <label for="area_sel">選擇地區</label>
                    <select class="form-control" id="area_sel" name="area_sel">

                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>
<?php include __DIR__. '/partials/scripts.php'; ?>
<script>
    let data;
    const cityDict = {};
    const city_sel = document.querySelector('#city_sel');
    const area_sel = document.querySelector('#area_sel');

    const optionTpl = o =>{
        return `<option value="${o.value}">${o.name}</option>`;
    };

    const genCitySel = ()=>{
        let str = '';

        data.forEach(el=>{
            // 縣市名當 key
            cityDict[el.name] = el.districts;

            str += optionTpl({
                value: el.name,
                name: el.name,
            });
        });
        city_sel.innerHTML = str;
    };

    const genAreaSel = (cityName)=>{
        let str = '';

        cityDict[cityName].forEach(el=>{
            str += optionTpl({
                value: el.zip,
                name: el.name,
            });
        });
        area_sel.innerHTML = str;
    };

    const onCityChanged = event => {
        genAreaSel(city_sel.value);
    };
    city_sel.addEventListener('change', onCityChanged);

    fetch('taiwan_districts.json').then(r=>r.json()).then(obj=>{
        data = obj;
        genCitySel();
        city_sel.dispatchEvent(new Event('change')); // 發送事件，派送事件
    });


</script>
<?php include __DIR__. '/partials/html-foot.php'; ?>