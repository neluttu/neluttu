const textString = document.getElementById('message'),
skills = [
    'front-end',
    'back-end',
    'full stack',
    ];

let currentSkill = 0;

function typeMessage() {
    if (!skills[currentSkill])
       currentSkill = 0;
    
    const currentString = skills[currentSkill];
    currentString.split();
    let newString = '';
    let currentLetter = 0;

    let int1 = setInterval( () => {
        if (!currentString[currentLetter]) {

            currentSkill++;
            
            if(currentSkill < 3) {
                setTimeout(()=>{
                    deleteMessage(newString);
                }, 500); // Wait time until skill deletion
                
            }
            if(currentSkill == 3) {
                document.getElementById("message").classList.add("final");                            }
            clearInterval(int1);
        } 
        else {
            newString += currentString[currentLetter++];
            textString.innerHTML = newString;
        }
    }, 100);
}

function deleteMessage(str) {
    let int = setInterval( () => {
        if (str.length === 0) {
        setTimeout( () => {
            typeMessage();
        }, 1500); // Pause between skills

        clearInterval(int);
        } 
        else {
            str = str.split('');
            str.pop();
            str = str.join('');
            textString.innerHTML = str;
        }
    },50); // Speed of letter removal
}

setTimeout(typeMessage, 2000);