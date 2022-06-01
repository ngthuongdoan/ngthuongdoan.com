type EducationSectionProps = {}

const EducationSection: React.FC<EducationSectionProps> = () => {
  return (
    <section className="mb-20 pb-20 border-b-2 border-swatch_3 w-full">
      <h1 className="text-center text-3xl">Education & Experience</h1>

      <div className="mt-16 w-full">
        <div className="flex flex-col lg:flex-row justify-center lg:gap-32 w-full px-4 lg:px-32">
          <div>
            <h2 className="font-bold text-swatch_2 uppercase font-source-sans text-sm mb-8">
              Education
            </h2>
            <ul>
              <li>
                <h3 className="font-bold text-lg">
                  Bachelor of Software Engineering
                </h3>
                <p className="text-sm mb-4 text-swatch_2">
                  (2017-2021) - Can Tho University
                </p>
                <ul className="text-sm flex flex-col gap-1 max-w-md">
                  <li>GPA: 3.34/4.0</li>
                  <li>
                    The highest score student of entrance examination for
                    Software Engineering - Course 43rd.
                  </li>
                  <li>Be scholarship almost every academic semester.</li>
                  <li>Be the vice-monitor of class Software Engineering A1.</li>
                  <li>
                    Among 20 selected students for the AUN-QA of the Software
                    Engineering Department.
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div>
            <h2 className="font-bold text-swatch_2 uppercase font-source-sans text-sm mb-8">
              Experience
            </h2>
            <ul>
              <li>
                <h3 className="font-bold text-lg">Freelance Web Developer</h3>
                <p className="text-sm mb-4 text-swatch_2">(2020 - 04/2021)</p>
                <p className="text-sm max-w-md">
                  Be a leader of the Team, using VueJS to create amazing
                  websites and gain massive knowledge about Web Development.
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  )
}

export default EducationSection
