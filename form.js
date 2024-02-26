
const signinbt = document.querySelector('.signinbt')
const signupbt = document.querySelector('.signupbt')
const formbox = document.querySelector('.form-box')

const body = document.querySelector('body')

signupbt.onclick = function(){
    formbox.classList.add('active')
    body.classList.add('active')
}

signinbt.onclick = function(){
    formbox.classList.remove('active')
    body.classList.remove('active')
}