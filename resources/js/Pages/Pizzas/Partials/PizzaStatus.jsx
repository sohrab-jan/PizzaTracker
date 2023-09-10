export default function PizzaStatus({currentStatus}){
    const statuses=[
        'Ordered',
        'Prepping',
        'Baking',
        'Checking',
        'Ready',
    ];

    const getClass=(status,index)=>{console.log(currentStatus)
        let baseClasses = "w-1/5 bg-gradient-to-b flex items-center justify-center h-20 border-r-2 transition-all";

        if (index===0){
            baseClasses += ' rounded-l-full';
        }

        if (status===currentStatus){
            baseClasses = baseClasses.replace('border-r-2','');
            return `${baseClasses} bg-red-500 to-red-600 scale-110 rounded shadow-lg`;
        }

        if (index === (statuses.length - 1 )){
            baseClasses += baseClasses.replace('border-r-2','rounded-r-full');
        }

        if (statuses.indexOf(currentStatus) >index){
            return `${baseClasses} bg-blue-500 to-blue-600 border-blue-700`;
        }
        return `${baseClasses} bg-blue-300 to-blue-400 border-blue-500`;
    }

    return(
        <div className="flex border-4 border-blue-200 rounded-full">
            {statuses.map((status, index)=>
                <div key={index} className={getClass(status,index)}>
                    <p className="uppercase font-medium italic text-white drop-shadow text-center">
                        <span className="block text-3xl font-bold not-italic leading-none">{index+1}</span>
                        {status}
                    </p>
                </div>
            )}
        </div>
    );
};
