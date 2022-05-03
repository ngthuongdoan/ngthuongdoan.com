import { IconProps } from '.'

const Javascript: React.FC<IconProps> = ({ size = 32 }) => {
  return (
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 85 85"
      fill="#fff"
      fillRule="evenodd"
      stroke="#000"
      strokeLinecap="round"
      strokeLinejoin="round"
      width={size}
      height={size}
    >
      <use xlinkHref="#C" x="2.5" y="2.5" />
      <symbol id="C" overflow="visible">
        <g stroke="none">
          <path fill="#f7df1e" d="M0 0h80v80H0z" />
          <path
            d="M36 63V37h7v26c0 10-14 16-22 4l6-4c3 6 9 4 9 0zm30-17c-4-5.5-9-3-9 .5C57 52 73.5 51 73.5 63c-.5 14-20 13.5-26 3l6-3.5C58 69.5 66 67 66 63c-.5-7-16-3.5-16-16.5-.5-10 14.5-15.5 21.5-4L66 46"
            fill="#323232"
          />
        </g>
      </symbol>
    </svg>
  )
}

export default Javascript
