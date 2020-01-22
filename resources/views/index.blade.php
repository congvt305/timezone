<div class="main-content">
    <h1>Ung dung xem gio hien tai cua cac thanh pho tren The gioi</h1>
    <label for="select-city"></label>
    <select name="" id="select-city" >
        <option value="">Chon thanh pho</option>
        <option value="America-Chihuahua">Chihuahua, Mexico</option>
        <option value="America-Costa_Rica">Costa Rica</option>
        <option value="America-Havana">La Habana, Cuba</option>
        <option value="Asia-Hong_Kong">Hồng Kông</option>
        <option value="Asia-Ho_Chi_Minh">Hồ Chí Minh, Việt Nam</option>
    </select>
</div>

<script>
    document.getElementById("select-city").onchange = function () {
        ChooseCity()
    };

    function ChooseCity() {
        var time_zone = document.getElementById("select-city");
        window.location.href = time_zone.value;
    }
</script>
