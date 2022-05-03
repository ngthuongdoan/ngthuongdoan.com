import React from 'react'

type Props = {}

export default function NotFoundPage({}: Props) {
  return (
    <div className="flex flex-col w-full items-center justify-center h-screen text-center">
      <img
        src="https://www.hyperui.dev/photos/confused-travolta.gif"
        alt="John Travolta confused"
        className="overflow-hidden object-contain w-full h-64 rounded-lg"
      />

      <p className="mt-6 text-gray-500">
        We can&rsquo;t find anything, try searching again.
      </p>
    </div>
  )
}
