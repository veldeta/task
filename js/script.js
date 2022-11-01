// Задание 4 
$.each($('[data-id]'), function(index, value){
    
    console.log('Индекс ' + index )
    console.log(value)
})

// Задание 6
$.each($('[data-noprint]'), function(index, value){
    value.style = 'display: none'
})


// Задание 5
let parent = $('.parent').children('[class="class"]').slice(0)

parent.sort(function(a,b) {
    return a.clientHeight - b.clientHeight
})

$('.parent').prepend('<br><br>')
$('.parent').prepend(parent)