import React, { useState } from 'react';

function Test() {
  const [inputs, setInputs] = useState([{ id: 1, value: '' }]);
  const [nextId, setNextId] = useState(2);

  const handleAddInput = () => {
    setInputs([...inputs, { id: nextId, value: '' }]);
    setNextId(nextId + 1);
  };

  // handle change
  const handleChange = (id, newValue) => {
    setInputs(inputs.map(input =>
      input.id === id ? { ...input, value: newValue } : input
    ));
  };

  console.log(inputs);

  return (
    <div className="p-4">
      {inputs.map((input, index) => (
        <div key={input.id} className="mb-2">
          <input
            type="text"
            name={`value${input.id}`}
            value={input.value}
            onChange={e => handleChange(input.id, e.target.value)}
            className="border rounded px-2 py-1 w-full"
          />
        </div>
      ))}
      <button
        onClick={handleAddInput}
        className="bg-green-500 text-white px-3 py-1 rounded"
      >
        Add Input
      </button>
      <h1>===================</h1>
      {inputs.map(input => (
        <div key={input.id}>
          <h1>ID: {input.id}</h1>
          <h1>Value: {input.value}</h1>
        </div>
      ))}
    </div>
  );
}

export default Test;
