const { Button } = wp.components;

const RemoveProductRow = ({ index, handleRemoveProductRow }) => {
	return (
		<Button
			className="affx-pdt-row-remove-btn"
			onClick={() => {
				handleRemoveProductRow(index);
			}}
		>
			<svg
				xmlns="http://www.w3.org/2000/svg"
				width="13.549"
				height="18.065"
				viewBox="0 0 13.549 18.065"
			>
				<g transform="translate(-132.5 -10)" opacity="0.2">
					<path
						d="M146.049,12.319h-3.764v-.94A1.378,1.378,0,0,0,140.906,10h-3.268a1.376,1.376,0,0,0-1.373,1.379v.94H132.5v.691h.992l1.11,13.676a1.378,1.378,0,0,0,1.379,1.379h6.633a1.378,1.378,0,0,0,1.379-1.379l1.1-13.676h.96Zm-9.1-.94a.691.691,0,0,1,.688-.691h3.27a.688.688,0,0,1,.688.691v.94H136.95ZM143.3,26.65v.037a.691.691,0,0,1-.688.691h-6.633a.688.688,0,0,1-.688-.691V26.65l-1.115-13.638H144.4Z"
						transform="translate(0 0)"
						fill="%23191919"
					/>
					<path
						d="M482.1,255h.723v12.466H482.1Z"
						transform="translate(-343.188 -241.83)"
						fill="%23191919"
					/>
					<path
						d="M600.009,255h-.756l-.553,12.466h.756Z"
						transform="translate(-457.688 -241.83)"
						fill="%23191919"
					/>
					<path
						d="M337.45,255h-.75l.553,12.466h.756Z"
						transform="translate(-200.472 -241.83)"
						fill="%23191919"
					/>
				</g>
			</svg>
		</Button>
	);
};

export default RemoveProductRow;
