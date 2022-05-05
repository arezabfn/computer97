$(".btnedit").click(e =>{
    let textvalue = displayData(e);

    let id = $("input[name*='id']");
    let stid = $("input[name*='stid']");
    let name = $("input[name*='name']");
    let lastname = $("input[name*='lastname']");
    let age = $("input[name*='age']");
    let gender = $("input[name*='gender']");

    id.val(textvalue[0]);
    stid.val(textvalue[1]);
    name.val(textvalue[2]);
    lastname.val(textvalue[3]);
    age.val(textvalue[4]);
    gender.val(textvalue[5]);
});

function displayData(e){
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues =[];
    for(const value of td){
        if(value.dataset.id==e.target.dataset.id)
        {
            textvalues[id++] = value.textContent;

        }
    }
    return textvalues;
}