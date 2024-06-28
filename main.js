    const form = document.getElementsByClassName('formCadastro');
    const inputs = document.querySelectorAll('.campo-required');
    const spans = document.querySelectorAll('.span-required');

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        nameValidate();
        matriculaValidate();
        senhaValidate();
    });
    
    function setError(index) {
        inputs[index].style.border = '2px solid #ff5151';
        spans[index].style.display = 'block';
    }
    
    function removeError(index) {
        inputs[index].style.border = '';
        spans[index].style.display = 'none';
    }

    function nameValidate() {
        if(inputs[0].value.length < 3)
        {
            setError(0);
        } else {
            removeError(0);
        }
    }

    function matriculaValidate() {
        if(inputs[1].value.length < 12) {
            setError(1);
        } else {
            removeError(1);
        }
    }

    function senhaValidate() {
        if(inputs[3].value.length < 8) {
            setError(3);
        } else {
            removeError(3);
        }
    }

    const cadastro = document.getElementById('submit');

    function cadastrado() {
        alert("Cadastro realizado!");
    }

    cadastro.addEventListener('click', cadastrado);

//validação tela de login
let formulario = document.getElementById('formulario');
let textForm = document.getElementById('textForm');
let textSenha = document.getElementById('textSenha');
const campoVazio = document.getElementById('matricula-login').value;
let textmatricula = document.getElementById('textMatricula');

formulario.addEventListener('submit', (e) => {
    e.preventDefault()
    validatorMatricula();
})

function validators(validatorMatricula, validator) {
    
}

function validatorMatricula () {
    let matricula = document.getElementById('matricula-login');
    if(matricula.value.length < 10) {
        document.getElementById('textMatricula').style.display = "block";
        document.getElementById('matricula-login').style.border = "2px solid #ff7676"
    } else {
        document.getElementById('textMatricula').style.display = "none";
        document.getElementById('matricula-login').style.border = "2px solid #31FF8B"
    }
}

function validatorSenha () {
    let senha = document.getElementById('senha-login');
    if(senha.value.length < 7) {
        document.getElementById('textSenha').style.display = "block";
        document.getElementById('senha-login').style.border = "1px solid #ff7676"
    } else {
        document.getElementById('textSenha').style.display = "none";
        document.getElementById('senha-login').style.border = "1px solid #31FF8B"
    }
}

//página de notas
function category(c) {
    var item = document.getElementById('item-'+c).innerHTML;
    document.getElementsByTagName('input')[0].value = item;
}

function dropDown(p) {
    var e = document.getElementsByClassName('dropDown')[0];
    var d = ['block','none'];

    e.style.display = d[p];
    e.style.transform = 'translate(0px)';

}



// Página de frequência
document.addEventListener('DOMContentLoaded', () => {
    // Dados das matérias e faltas
    let subjects = [
        { name: 'Matemática', totalClasses: 20, missedClasses: 78 },
        { name: 'História', totalClasses: 15, missedClasses: 2 },
        { name: 'Português', totalClasses: 18, missedClasses: 7 }
    ];

    // Função para renderizar as barras de progresso
    function updateProgressBars(subjects) {
        subjects.forEach(subject => {
            const percentage = (subject.missedClasses / subject.totalClasses) * 100;

            // Atualiza a barra de progresso e o texto de faltas
            const progressBar = document.getElementById(`progress-bar-${subject.name.toLowerCase()}`);
            const attendanceText = document.getElementById(`attendance-text-${subject.name.toLowerCase()}`);

            if (progressBar && attendanceText) {
                progressBar.style.width = percentage + '%';
                attendanceText.textContent = `Faltas: ${percentage.toFixed(0)}`;
            }
        });
    }

    // Renderiza inicialmente
    updateProgressBars(subjects);

    // Exemplo de atualização de dados e renderização
    setTimeout(() => {
        subjects[0].missedClasses = 8; // Alterando faltas em Matemática
        subjects[1].missedClasses = 5; // Alterando faltas em História
        updateProgressBars(subjects);
    }, 3000); // Atualiza após 3 segundos (apenas para demonstração)
});
