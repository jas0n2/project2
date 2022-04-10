var options = {
    chart: {
        height: 330,
        type: "bar",
        stacked: !0,
        toolbar: {
            show: !1
        },
        zoom: {
            enabled: !0
        }
    },
    plotOptions: {
        bar: {
            horizontal: !1,
            columnWidth: "15%",
            endingShape: "rounded"
        }
    },
    dataLabels: {
        enabled: !1
    },
    series: [{
        data: [178, 155, 115, 185, 148, 196, 180, 181, 150, 140, 180, 160]
        }],
    xaxis: {
        categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
    },
    colors: ["#727cf5"],
    legend: {
        position: "bottom"
    },
    fill: {
        opacity: 1
    }
};
