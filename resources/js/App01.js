// resources/js/App.js
import React, { useState } from 'react';

function Time () {

    const[currentTime, setCurrentTime] = useState(new Date())

    const intervalId = setInterval(() => {
        setCurrentTime(new Date())
    }, 1000)

    return (
        <div>
            <p>{currentTime.toLocaleString()}</p>
        </div>
    )

}



function App() {
    return (
        <div>
            <Time />
            <h1>Hello, React in Laravel!</h1>
        </div>
    );
}

export default App;